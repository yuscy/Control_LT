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



       

        
          
    
    
    </div>
    

        

    
      

</x-admin-layout>