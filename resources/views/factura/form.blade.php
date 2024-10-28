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

    <div class="col-span-2 sm:col-span-1"> <!-- Select - Segunda Torre -->
        <div id="respuesta_actividad">
        </div>
    </div> <!-- Fin Select - Segunda Torre -->

    <div class="col-span-2 sm:col-span-1"> <!-- Select - Pata -->
        <div id="respuesta_actividad">
        </div>
    </div> <!-- Fin Select - pata -->

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

  {{-- <div class="grid gap-4 mb-4 grid-cols-2">
      <div class="col-span-2">
          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
          <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
      </div>
      <div class="col-span-2 sm:col-span-1">
          <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
          <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
      </div>
      <div class="col-span-2 sm:col-span-1">
          <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
          <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
              <option selected="">Select category</option>
              <option value="TV">TV/Monitors</option>
              <option value="PC">PC</option>
              <option value="GA">Gaming/Console</option>
              <option value="PH">Phones</option>
          </select>
      </div>
      <div class="col-span-2">
          <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
          <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>                    
      </div>
  </div> --}}
  <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      Crear borrador
  </button>

