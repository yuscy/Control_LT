<x-admin-layout>
    <x-slot name="sidebar">
        @include('layouts.include.sidebar.facturas') <!-- Incluye el sidebar de Main o cualquier otro -->
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Facturas') }}
        </h2>
    </x-slot>
    
    <div class="grid gap-4 mb-4 grid-cols-4">
        <div class="col-span-3">
        <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Facturación</span> App</h1>
        </div>
        <!-- Modal toggle -->
        <div class="col-span-1 flex justify-center items-center w-full p-2">
        <!-- Botón para abrir el modal -->
            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                Abrir Modal
            </button>
        </div>
    </div>


    <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">A continuación seleccione una opción para empezar.</p>
    
    <br>
        <!-- Contenido de la vista -->
        
        @livewire('table-facturas')
        
    <br>

        



        <!-- Main modal -->
  <div id="crud-modalXXX" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full md:w-1/2 max-w-1/2 max-h-full"> {{--max-w-md --}}
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Generar nuevo cobro
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Cerrar</span>
                </button>
            </div>

              <!-- Modal body -->
              <form class="p-4 md:p-5">

                <div class="grid gap-4 mb-4 grid-cols-2 border-b rounded-t dark:border-gray-600"> <!-- Contenedor de componentes del Forms YP -->

                    <div class="col-span-2"> <!-- Select - Actividad -->
                        <label for="select_actividad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Actividad</label>
                        <select name="actividad" id="select_actividad" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected disabled>Seleccione una Actividad</option>
                            @foreach($actividades as $actividade)   
                            <option value="{{ $actividade->id }}" data-tipo="{{ $actividade->Tipo_actividad }}">{{ $actividade->Actividad_resumida }}</option>
                            @endforeach
                        </select>
                    </div> <!-- Fin Select - Actividad -->

                    <div class="col-span-2 sm:col-span-1"> <!-- Select - Torre -->
                        <label for="select_torre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Torre</label>
                            <select name="torre" id="select_torre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected disabled>Seleccione una torre</option>
                                @foreach($torres as $torre)    
                                <option value="{{ $torre->id }}">{{ $torre->Torre }}</option>
                                @endforeach
                            </select>
                    </div> <!-- Fin Select - Torre -->

                    <div id="respuesta_actividad_torre2" class="hidden col-span-2 sm:col-span-1"> <!-- Select - Segunda Torre -->
                        
                    </div> <!-- Fin Select - Segunda Torre -->

                    <div id="respuesta_actividad_pata" class="hidden col-span-2 sm:col-span-1"> <!-- Select - Pata -->
                        
                    </div> <!-- Fin Select - pata -->
                    

                    <div class="col-span-2 flex justify-center items-center w-full p-2">
                        <button class="text-white inline-flex items-center justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-full md:w-auto">
                            Crear borrador
                        </button>
                    </div>
                    
                </div> <!-- Fin Contenedor de componentes del Forms YP -->

                <div class="grid gap-4 mb-4 grid-cols-5 border-b rounded-t dark:border-gray-600"> <!-- Contenedor de información de la Torre -->
                    
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white col-span-5">
                        Información de la Torre / Vano a facturar
                    </h3>

                    <div class="col-span-2"> <!-- Info - Torre/Vano -->
                        <label for="torre_vano" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Torre / Vano</label>
                        <input disabled type="text" name="torre_vano" id="torre_vano" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div> <!-- Fin Info - Torre/Vano -->

                    <div class="col-span-1"> <!-- Info - Tipo de torre -->
                        <label for="tipo_torre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo</label>
                        <input disabled type="text" name="tipo_torre" id="tipo_torre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div> <!-- Fin Info - Tipo de torre -->

                    <div class="col-span-1"> <!-- Info - Cuerpo de torre -->
                        <label for="cuerpo_torre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cuerpo</label>
                        <input disabled type="text" name="cuerpo_torre" id="cuerpo_torre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div> <!-- Fin Info - Cuerpo de torre -->

                    <div class="col-span-1"> <!-- Info - Pata de torre -->
                        <label for="pata_torre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pata</label>
                        <input disabled type="text" name="pata_torre" id="pata_torre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div> <!-- Fin Info - Pata de torre -->

                    <div class="col-span-1"> <!-- Info - Cimentación de la Pata -->
                        <label for="cim_pata" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cimentación</label>
                        <input disabled type="text" name="cim_pata" id="cim_pata" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div> <!-- Fin Info - Cimentación de la Pata -->

                    <div class="col-span-1"> <!-- Info - Pedestal de la Pata -->
                        <label for="pede_pata" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pedestal</label>
                        <input disabled type="text" name="pede_pata" id="pede_pata" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div> <!-- Fin Info - Cimentación de la Pata -->

                    <div class="col-span-1"> <!-- Info - Plano de la Pata -->
                        <label for="plano_pata" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Plano</label>
                        <input disabled type="text" name="plano_pata" id="plano_pata" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div> <!-- Fin Info - Plano de la Pata -->

                    <div class="col-span-1"> <!-- Info - Ciudad -->
                        <label for="ciudad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ciudad</label>
                        <input disabled type="text" name="ciudad" id="ciudad" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div> <!-- Fin Info - Ciudad -->

                    <div class="col-span-1"> <!-- Cantidad Total segun Ingenieria -->
                        <label for="cant_ing" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cant. Total obra sg. Ing</label>
                        <input disabled type="text" name="cant_ing" id="cant_ing" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div> <!-- Fin Cantidad Total segun Ingenieria -->

                </div> <!-- Fin del contenedor de Información de la torre -->

                <div class="grid gap-4 mb-4 grid-cols-5 border-b rounded-t dark:border-gray-600"> <!-- Contenedor de información del cobro -->
                    
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white col-span-5">
                        Detalle del ítem a facturar
                    </h3>

                    <div class="col-span-2"> <!-- Item del CT cobrado -->
                        <label for="item_CT" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item del CT cobrado</label>
                        <input disabled type="text" name="item_CT" id="item_CT" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div> <!-- Fin Item del CT cobrado -->

                    <div class="col-span-1"> <!-- Unidad de medida del Item del CT cobrado -->
                        <label for="und_item" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unidad de medida</label>
                        <input disabled type="text" name="und_item" id="und_item" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div> <!-- Fin Unidad de medida -->

                    <div class="col-span-1"> <!-- Precio unitario del Item del CT cobrado -->
                        <label for="precio_unit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio unitario</label>
                        <input disabled type="text" name="precio_unit" id="precio_unit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div> <!-- Fin Precio unitario -->

                    <div class="col-span-1"> <!-- Vigencia Precio unitario del Item del CT cobrado -->
                        <label for="vige_precio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vigencia precio unit.</label>
                        <input disabled type="text" name="vige_precio" id="vige_precio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div> <!-- Fin Vigencia Precio unitario -->

                    <div class="col-span-1"> <!-- Porcentaje a facturar -->
                        <label for="porcent_fact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Porcentaje a facturar</label>
                        <input type="number" name="porcent_fact" id="porcent_fact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div> <!-- Porcentaje a facturar -->

                    <div class="col-span-1"> <!-- Cant. Obra a facturar -->
                        <label for="cant_afact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cantidad Obra a facturar</label>
                        <input disabled type="number" name="cant_afact" id="cant_afact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div> <!-- Fin Cant. Obra a facturar -->

                    <div class="col-span-1"> <!-- Subtotal cto directo a facturar -->
                        <label for="subt_fact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subtotal cto directo a facturar</label>
                        <input disabled type="number" name="subt_fact" id="subt_fact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div> <!-- Fin Cant. Obra a facturar -->

                    

                </div> <!-- Fin del contenedor de información del cobro -->
                  
              </form>
              
          </div>
      </div>
  </div> 
  



<!-- Activa Select - Segunda Torre o la Pata -->
<script>
    $(document).on('change', '#actividad_simple', function() {
    var tipo_actividad = $(this).find(':selected').data('tipo');
    
    if (tipo_actividad === "Vano") {
        $.ajax({
            url: '{{ route('factura.torre2') }}',
            method: 'GET',
            success: function(data) {
                $('#respuesta_actividad_torre2').html(data).removeClass('hidden');
                $('#respuesta_actividad_pata').addClass('hidden'); // Ocultar la otra
                $('#tipo_torre, #cuerpo_torre, #pata, #cim_pata, #pedestal, #plano').addClass('hidden');
                $('#long_vano').removeClass('hidden');
            }
        });
    } else if (tipo_actividad === "Pata") {
        $.ajax({
            url: '{{ route('factura.pata') }}',
            method: 'GET',
            success: function(data) {
                $('#respuesta_actividad_pata').html(data).removeClass('hidden');
                $('#respuesta_actividad_torre2, #long_vano').addClass('hidden'); // Ocultar la otra
                $('#tipo_torre, #cuerpo_torre, #pata, #cim_pata, #pedestal, #plano').removeClass('hidden');
            }
        });
    } else {
        $('#respuesta_actividad_torre2, #respuesta_actividad_pata').html('').addClass('hidden'); // Ocultar ambos si no hay contenido
        $('#tipo_torre, #cuerpo_torre').removeClass('hidden');
        $('#long_vano, #pata, #cim_pata, #pedestal, #plano').addClass('hidden');
    }
});

</script> <!-- Fin Activa Select - Segunda Torre -->


</x-admin-layout>