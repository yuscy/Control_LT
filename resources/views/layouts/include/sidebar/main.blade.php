@php
    // SIDEBAR DEL MAIN
    $links = [
        [
            'name' => 'Dashboard',
            'url' => route('dashboard'),
            'active' => request()->routeIs('dashboard'),
            'icon' => 'fa-solid fa-gauge-high',
        ],    
        [
            'name' => 'Inicio',
            'url' => route('admin.dashboard'),
            'active' => request()->routeIs('admin.dashboard'),
            'icon' => 'fa-solid fa-bolt',
        ],

        [
            'name' => 'Modulos',
            'url' => route('admin.module'),
            'active' => request()->routeIs('admin.module'),
            'icon' => 'fa-solid fa-shapes',
        ],
        // Puedes agregar más links aquí
    ];
@endphp
{{-- Aquí no estamos incluyendo el layout, solo los enlaces --}}
@include('layouts.include.admin.aside', ['links' => $links])