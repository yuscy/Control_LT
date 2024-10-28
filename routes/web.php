<?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\FacturaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
Route::get('/admin/module', function () {
    return view('admin.module');
})->name('admin.module');

Route::get('/aprobaciones', function () {
    return view('aprobaciones.index');
})->name('aprobaciones.index');
Route::get('/aprobaciones/show', function () {
    return view('aprobaciones.show');
})->name('aprobaciones.show');
Route::get('/aprobaciones/crear', function () {
    return view('aprobaciones.crear');
})->name('aprobaciones.crear');

Route::resource('empresas', EmpresaController::class);


//Rutas de Facturas:
Route::resource('facturas', FacturaController::class);

//Rutas auxiliares de Facturas:
Route::get('/factura/torre2', [FacturaController::class, 'torre2'])->name('factura.torre2');
Route::get('/factura/pata', [FacturaController::class, 'pata'])->name('factura.pata');
