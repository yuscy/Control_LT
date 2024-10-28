<x-admin-layout>
    <x-slot name="sidebar">
        @include('layouts.include.sidebar.main') <!-- Incluye el sidebar de Main -->
    </x-slot>

    

    



    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">

        <x-card-module>
            <x-slot name="svg">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-rounded-check" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M9 12l2 2l4 -4" />
                    <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
                </svg>
            </x-slot>
            <x-slot name="name">
                Aprobaciones
            </x-slot>
            <x-slot name="description">
                Registrar y consultar aprobaciones
            </x-slot>
            <x-slot name="url">
                {{ route('aprobaciones.index') }}
            </x-slot>
        </x-card-module>

        <x-card-module>
            <x-slot name="svg">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-factory-2" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3 21h18" />
                    <path d="M5 21v-12l5 4v-4l5 4h4" />
                    <path d="M19 21v-8l-1.436 -9.574a.5 .5 0 0 0 -.495 -.426h-1.145a.5 .5 0 0 0 -.494 .418l-1.43 8.582" />
                    <path d="M9 17h1" />
                    <path d="M14 17h1" />
                  </svg>
            </x-slot>
            <x-slot name="name">
                Empresas
            </x-slot>
            <x-slot name="description">
                Registrar y consultar empresas
            </x-slot>
            <x-slot name="url">
                {{ route('empresas.index') }}
            </x-slot>
        </x-card-module>

        <x-card-module>
            <x-slot name="svg">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-receipt-2" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2" />
                    <path d="M14 8h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5m2 0v1.5m0 -9v1.5" />
                </svg>
            </x-slot>
            <x-slot name="name">
                Facturación
            </x-slot>
            <x-slot name="description">
                Registrar y consultar facturas
            </x-slot>
            <x-slot name="url">
                {{ route('facturas.index') }}
            </x-slot>
        </x-card-module>
      

        
          
    
    
    </div>
    

        

    
      

</x-admin-layout>