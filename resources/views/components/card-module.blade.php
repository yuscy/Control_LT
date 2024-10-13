<a href="{{ $url }}" class="flex flex-col items-center bg-gray-100 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-200 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <!-- Reemplazar la etiqueta <img> por el SVG -->
    <div class="relative flex-shrink-0 left-4">
        {{ $svg }}
    </div>
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$name}}</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$description}}</p>
    </div>
</a>