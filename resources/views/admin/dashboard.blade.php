<x-admin-layout>
    <x-slot name="sidebar">
        @include('layouts.include.sidebar.main') <!-- Incluye el sidebar de Main -->
    </x-slot>

    <h1>Contenido de la vista que usa el sidebar de Main</h1>
</x-admin-layout>