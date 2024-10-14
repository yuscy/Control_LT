<div class="space-y-6">
    
    <div>
        <x-label for="nombre" :value="__('Nombre')"/>
        <x-input id="nombre" name="nombre" type="text" class="mt-1 block w-full" :value="old('nombre', $empresa?->nombre)" autocomplete="nombre" placeholder="Nombre"/>
        {{-- <x-input-error class="mt-2" :messages="$errors->get('nombre')"/> --}}
    </div>
    <div>
        <x-label for="tramo" :value="__('Tramo')"/>
        <x-input id="tramo" name="tramo" type="text" class="mt-1 block w-full" :value="old('tramo', $empresa?->tramo)" autocomplete="tramo" placeholder="Tramo"/>
        {{-- <x-input-error class="mt-2" :messages="$errors->get('tramo')"/> --}}
    </div>
    <div>
        <x-label for="tipo" :value="__('Tipo')"/>
        <x-input id="tipo" name="tipo" type="text" class="mt-1 block w-full" :value="old('tipo', $empresa?->tipo)" autocomplete="tipo" placeholder="Tipo"/>
        {{-- <x-input-error class="mt-2" :messages="$errors->get('tipo')"/> --}}
    </div>
    <div>
        <x-label for="nit" :value="__('Nit')"/>
        <x-input id="nit" name="nit" type="text" class="mt-1 block w-full" :value="old('nit', $empresa?->nit)" autocomplete="nit" placeholder="Nit"/>
        {{-- <x-input-error class="mt-2" :messages="$errors->get('nit')"/> --}}
    </div>

    <div class="flex items-center gap-4">
        <x-button>Submit</x-button>
    </div>
</div>