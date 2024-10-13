@php
    // SIDEBAR DEL MAIN
    $links = [
        [
            'name' => 'Inicio',
            'url' => route('dashboard'),
            'active' => request()->routeIs('dashboard'),
            'icon' => 'fa-solid fa-gauge-high',
        ],    
        [
            'name' => 'Dashboard',
            'url' => route('admin.dashboard'),
            'active' => request()->routeIs('admin.dashboard'),
            'icon' => 'fa-solid fa-gauge-high',
        ],

        [
            'name' => 'Modulos',
            'url' => route('admin.module'),
            'active' => request()->routeIs('admin.module'),
            'icon' => 'fa-solid fa-gauge-high',
        ],
        // Puedes agregar más links aquí
    ];
@endphp
{{-- Aquí no estamos incluyendo el layout, solo los enlaces --}}
@include('layouts.include.admin.aside', ['links' => $links])