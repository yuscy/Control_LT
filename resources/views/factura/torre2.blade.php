<label for="select_torre2" >Torre fin vano</label>
<select name="torre2" id="select_torre2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
    <option selected disabled>Seleccione una torre</option>
    @foreach($torres as $torre)    
    <option value="{{ $torre->id }}">{{ $torre->Torre }}</option>
    @endforeach
</select>

