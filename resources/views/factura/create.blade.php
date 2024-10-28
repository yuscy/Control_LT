<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }} Factura
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Create') }} Factura</h1>
                            <p class="mt-2 text-sm text-gray-700">Add a new {{ __('Factura') }}.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('facturas.index') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Back</a>
                        </div>
                    </div>

                    <div class="flow-root">
                        <div class="mt-8 overflow-x-auto">
                            <div class="max-w-xl py-2 align-middle">
                                <form method="POST" action="{{ route('facturas.store') }}"  role="form" enctype="multipart/form-data">
                                    @csrf

                                    @include('factura.form')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{-- Activa Select - Segunda Torre o la Pata--}}
<script>
    $(document).on('change','#select_actividad', function(){
    var tipo_actividad = $(this).find(':selected').data('tipo');
    //alert(tipo_actividad);
    if(tipo_actividad === "Vano") {
        $.ajax({
            url: '{{ route('factura.torre2') }}', 
            method: 'GET',
            success: function(data) {
                $('#respuesta_actividad').html(data);
            }
        });
    } else if (tipo_actividad === "Pata") {
        $.ajax({
            url: '{{ route('factura.pata') }}', 
            method: 'GET',
            success: function(data) {
                $('#respuesta_actividad').html(data);
            }
        });
    } else{
        $('#respuesta_actividad').html('');
    }
});
</script> {{-- Fin Activa Select - Segunda Torre --}}

</x-app-layout>
