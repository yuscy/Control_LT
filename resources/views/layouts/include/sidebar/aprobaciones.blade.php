@php
//SIDEBAR DEL MAIN
    $links = [
        [
            'name' => 'Inicio',
            'url' => route('admin.dashboard'),
            'active' => request()->routeIs('admin.dashboard'),
            'icon' => 'fa-solid fa-bolt',
        ],
        // Puedes agregar más links aquí
        [
            'name' => 'Consultar',
            'url' => route('aprobaciones.show'),
            'active' => request()->routeIs('aprobaciones.show'),
            'icon' => 'fa-solid fa-magnifying-glass',        
        ],
        [
            'name' => 'Registrar',
            'url' => route('aprobaciones.crear'),
            'active' => request()->routeIs('aprobaciones.crear'),
            'icon' => 'fa-solid fa-user-plus',        
        ],

    ]
@endphp

{{-- Aquí no estamos incluyendo el layout, solo los enlaces --}}
@include('layouts.include.admin.aside', ['links' => $links])