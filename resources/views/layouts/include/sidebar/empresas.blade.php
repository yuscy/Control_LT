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
            'url' => route('empresas.index'),
            'active' => request()->routeIs('empresas.index'),
            'icon' => 'fa-solid fa-magnifying-glass',        
        ],

    ]
@endphp

{{-- Aquí no estamos incluyendo el layout, solo los enlaces --}}
@include('layouts.include.admin.aside', ['links' => $links])