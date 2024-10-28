<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\FacturaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $facturas = Factura::paginate();
        $actividades = DB::table('actividades')-> get();
        $torres = DB::table('torres')-> get();

        return view('factura.index', compact('facturas', 'actividades', 'torres'))
            ->with('i', ($request->input('page', 1) - 1) * $facturas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $factura = new Factura();
        $actividades = DB::table('actividades')-> get();
        $torres = DB::table('torres')-> get();

        return view('factura.create', compact('factura', 'actividades', 'torres'));
    }

    public function torre2()
    {
        // Consulta la tabla de torres
        $torres = DB::table('torres')->get();
        return view('factura.torre2', compact('torres'));
    }

    public function pata()
    {
        return view('factura.pata');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FacturaRequest $request): RedirectResponse
    {
        Factura::create($request->validated());

        return Redirect::route('facturas.index')
            ->with('success', 'Factura created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $factura = Factura::find($id);

        return view('factura.show', compact('factura'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $factura = Factura::find($id);

        return view('factura.edit', compact('factura'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FacturaRequest $request, Factura $factura): RedirectResponse
    {
        $factura->update($request->validated());

        return Redirect::route('facturas.index')
            ->with('success', 'Factura updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Factura::find($id)->delete();

        return Redirect::route('facturas.index')
            ->with('success', 'Factura deleted successfully');
    }
}