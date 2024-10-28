<div class="hidden grid gap-2 mb-4 grid-cols-3 border-b rounded-t dark:border-gray-600 col-span-2"> <!-- Contenedor de Resumen Factura -->
    <div>
        <label for="factura_no">factura_no</label>
        <input wire:model="factura_no" type="text" id="factura_no" class="input" />
        @error('factura_no') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div>
        <label for="unidad_medida">unidad_medida</label>
        <input wire:model="unidad_medida" type="text" id="unidad_medida" class="input" />
        @error('unidad_medida') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div>
        <label for="precio_unitario">precio_unitario</label>
        <input wire:model="precio_unitario" type="text" id="precio_unitario" class="input" />
        @error('precio_unitario') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div>
        <label for="cantidad_obra_facturar">cantidad_obra_facturar</label>
        <input wire:model="cantidad_obra_facturar" type="text" id="cantidad_obra_facturar" class="input" />
        @error('cantidad_obra_facturar') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div>
        <label for="subtotal_costo_directo">subtotal_costo_directo</label>
        <input wire:model="subtotal_costo_directo" type="text" id="subtotal_costo_directo" class="input" />
        @error('subtotal_costo_directo') <span class="error">{{ $message }}</span> @enderror
    </div>

    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
    <button type="button" data-modal-toggle="crud-modal" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Cancel</button>

</div> <!-- Fin Contenedor de Resumen Factura -->