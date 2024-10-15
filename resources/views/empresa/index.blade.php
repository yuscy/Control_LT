<x-admin-layout>
    <x-slot name="sidebar">
        @include('layouts.include.sidebar.empresas') <!-- Incluye el sidebar de Main o cualquier otro -->
    </x-slot>

    <div class="flex justify-between p-2 mb-2 text-sm text-black-800 rounded-lg bg-white dark:bg-gray-800 dark:text-blue-400" role="alert">
        <h3 class="text-3xl font-bold dark:text-white">Empresas</h3>
        <button data-modal-target="crear-modal" data-modal-toggle="crear-modal" type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
            Nuevo
        </button>
    </div>

    @include('empresa.crear-modal')

    @livewire('table-empresas')
    
 
</x-admin-layout>
