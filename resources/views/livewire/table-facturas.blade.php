<div>
    @livewire('tabla-facturas')

    <br>

    <!-- Modal -->
    <div wire:ignore id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full md:w-1/2 max-w-1/2 max-h-full max-w-md">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Nuevo cobro
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal" @click="  $dispatch('invisible'); $dispatch('visible2') "> 
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Cerrar</span>
                    </button>
                </div>

                <form wire:submit.prevent="submit" class="p-4 md:p-5">
                    <div class="grid gap-1 mb-0 grid-cols-2"> <!-- Contenedor de componentes del Forms YP -->
                        
                        <div class="grid gap-1 grid-cols-2 mb-0 border-b rounded-t dark:border-gray-600 p-2 col-span-2"> <!-- Contenedor de info a facturar -->
                            <div class="col-span-2"> <!-- Actividad -->
                                <label for="actividad_simple">Actividad</label>
                                <select wire:model.live="selectedActividad" name="actividad_simple" id="actividad_simple" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option selected value="">Seleccione una Actividad</option>
                                    @foreach($actividades as $actividade)   
                                    <option value="{{ $actividade->id }}" data-tipo="{{ $actividade->Tipo_actividad }}">{{ $actividade->Actividad_resumida }}</option>
                                    @endforeach
                                </select>
                                @error('actividad_simple') <span class="error">{{ $message }}</span> @enderror
                            </div> <!-- Fin Actividad -->
    
                            <div class="col-span-2 sm:col-span-1"> <!-- Torre -->
                                <label for="torre_select">Torre</label>
                                <select wire:model.live="selectedTorre" name="torre_vano" id="torre_select" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option selected value="">Seleccione una torre</option>
                                    @foreach($torres as $torre)
                                        <option value="{{ $torre->id }}">{{ $torre->Torre }}</option>
                                    @endforeach
                                </select>
                                @error('selectedTorre') <span class="error">{{ $message }}</span> @enderror
                            </div> <!-- Fin Torre -->
    
                            <div id="respuesta_actividad_torre2" class="hidden col-span-2 sm:col-span-1"> <!-- Select - Segunda Torre -->
                                
                            </div> <!-- Fin Select - Segunda Torre -->
            
                            <div id="respuesta_actividad_pata" class="hidden col-span-2 sm:col-span-1"> <!-- Select - Pata -->
                                
                            </div> <!-- Fin Select - pata -->
    
                            <div x-data="{ visible2: true }"
                                @visible2.window="visible2 = true"
                                @invisible2.window="visible2 = false"
                                x-show="visible2" class="col-span-2 flex justify-center items-center w-full">
                                <button 
                                    {{-- @click="$dispatch('visible-info'); buttonVisible = false" --}}
                                    @click="$dispatch('visible'); visible2 = false"
                                    type="button"
                                        class="text-white inline-flex items-center justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-full md:w-auto">
                                        Crear borrador
                                    </button>
                            </div>
                        </div> <!-- Fin Contenedor de info a facturar -->
                        
                        <div x-data="{ visible: false }" 
                            @visible.window="visible = true"
                            @invisible.window="visible = false" 
                            x-show="visible" class="grid gap-2 grid-cols-3 border-b rounded-t dark:border-gray-600 p-2 col-span-2"> <!-- Contenedor de información de la Torre -->
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white col-span-3"> 
                                Información de la Torre / Vano a facturar
                            </h3>

                            <div class="col-span-3 sm:col-span-2"> <!-- Torre Input -->
                                <label for="torre_input">Torre</label>
                                <input type="text" wire:model="torre_vano_text" id="torre_input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            </div> <!-- Fin Torre/Vano -->

                            <div id="pata" class="col-span-3 sm:col-span-1"> <!-- Pata Input -->
                                <label for="pata_input">Pata</label>
                                <input type="text" wire:model="selectedPata" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            </div> <!-- Fin pata -->

                            <div id="tipo_torre" class="hidden col-span-3 sm:col-span-1"> <!-- Tipo Torre Input -->
                                <label for="tipo_torre">Tipo Torre</label>
                                <input type="text" wire:model="tipo" id="tipo_torre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            </div> <!-- Fin Info - Tipo de torre -->

                            <div id="cuerpo_torre" class="hidden col-span-3 sm:col-span-1"> <!-- Cuerpo Torre Input -->
                                <label for="cuerpo_torre">Cuerpo Torre</label>
                                <input type="text" wire:model="cuerpo" id="cuerpo_torre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            </div> <!-- Fin Info - Cuerpo de torre -->

                            <div id="long_vano" class="hidden col-span-3 sm:col-span-1"> <!-- Cuerpo Torre Input -->
                                <label for="long_vano">Longitud vano</label>
                                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            </div> <!-- Fin Info - Cuerpo de torre -->

                            <div id="cim_pata" class="col-span-3 sm:col-span-1"> <!-- Cimentación de pata -->
                                <label for="long_vano">Cimentación</label>
                                <input type="text" wire:model.live="cimentacion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            </div> <!-- Fin Cimentación de pata -->

                            <div id="pedestal" class="col-span-3 sm:col-span-1"> <!-- Pedestal de pata -->
                                <label for="pedestal">Pedestal</label>
                                <input type="text" wire:model.live="pedestal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            </div> <!-- Fin Pedestal de pata -->

                            <div id="plano" class="col-span-3 sm:col-span-1"> <!-- Plano de pata -->
                                <label for="plano">Plano</label>
                                <input type="text" wire:model.live="plano" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            </div> <!-- Fin Plano de pata -->

                            <div id="cant_obra_ing" class="col-span-3 sm:col-span-1"> <!-- Cantidad de obra sgn ingeniería -->
                                <label for="cant_obra_ing">Cant. Obra ing</label>
                                <input type="text" wire:model.live="cant_obra_ing" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            </div> <!-- Fin Cantidad de obra sgn ingeniería -->

                            <div id="municipio" class="col-span-3 sm:col-span-1"> <!-- Municipio Torre Input -->
                                <label for="municipio">Municipio (ICA)</label>
                                <input type="text" wire:model="municipio" id="municipio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            </div> <!-- Fin Info - Cuerpo de torre -->

                        </div> <!-- Fin del contenedor de Información de la torre -->


                        <div x-data="{ visible: false }" 
                            @visible.window="visible = true"
                            @invisible.window="visible = false" 
                            x-show="visible" class="grid gap-2 grid-cols-3 border-b rounded-t dark:border-gray-600 p-2 col-span-2"> <!-- Contenedor de información de la Factura -->
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white col-span-3"> 
                                Información del Ítem a facturar
                            </h3>

                            <div class="col-span-3 sm:col-span-2"> <!-- Item del contrato a cobrar -->
                                <label for="item_cobrar">Item del contrato a cobrar</label>
                                <input type="text" wire:model="actividad_full" id="torre_input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" style="white-space: pre-wrap; word-wrap: break-word;">
                            </div> <!-- Fin Item del contrato a cobrar -->

                            <div class="col-span-3 sm:col-span-1"> <!-- Unidad de medida -->
                                <label for="tipo_torre">Und. medida</label>
                                <input type="text" wire:model="unidad_medida" id="tipo_torre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            </div> <!-- Fin Info - Unidad de medida -->

                            <div class="col-span-3 sm:col-span-1"> <!-- Precio Unitario -->
                                <label for="cuerpo_torre">Precio unitario</label>
                                <input type="text" wire:model="precio_unitario" id="cuerpo_torre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            </div> <!-- Fin Info - Precio Unitario -->

                            <div class="col-span-3 sm:col-span-1"> <!-- Vigencia Precio Unitario -->
                                <label for="municipio">Vigencia precio</label>
                                <input type="text" wire:model="vigencia" id="municipio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            </div> <!-- Fin Info - Cuerpo de torre -->

                        </div> <!-- Fin del contenedor de Información de la Factura -->

                        <div x-data="{ visible: false }" 
                            @visible.window="visible = true"
                            @invisible.window="visible = false" 
                            x-show="visible" class="grid gap-1 grid-cols-2 mb-0 border-b rounded-t dark:border-gray-600 p-2 col-span-2"> <!-- Contenedor de Detalle del cobro -->
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white col-span-2"> 
                                Detalle del cobro
                            </h3>

                            <div class="col-span-2 sm:col-span-1"> <!-- Cantidad de obra según ingeniería -->
                                <label for="item_cobrar">Cant. Obra sgn ing.</label>
                                <input type="text" wire:model="actividad_full" id="torre_input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" style="white-space: pre-wrap; word-wrap: break-word;">
                            </div> <!-- Fin Cantidad de obra según ingeniería -->

                            <div class="col-span-2 sm:col-span-1"> <!-- Porcentaje de obra pagada -->
                                <label for="tipo_torre">% Obra Pagada</label>
                                <input type="text" wire:model="unidad_medida" id="tipo_torre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            </div> <!-- Fin Cantidad de obra pagada -->

                            <div class="col-span-2 sm:col-span-1"> <!-- Cantidad de obra a cobrar -->
                                <label for="cuerpo_torre">% Obra a facturar</label>
                                <input type="text" wire:model="precio_unitario" id="cuerpo_torre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            </div> <!-- Fin Cantidad de obra a cobrar -->

                            <div class="col-span-2 sm:col-span-1"> <!-- Subtotal Cto directo a facturar -->
                                <label for="municipio">Subt. Cto directo</label>
                                <input type="text" wire:model="vigencia" id="municipio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            </div> <!-- Fin Info - Cuerpo de torre -->

                        </div> <!-- Fin del contenedor de Detalle del cobro -->

                        {{-- @livewire('info-torre') --}}
                        {{-- @livewire('resu-factura') --}}
                        

                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

    
    

