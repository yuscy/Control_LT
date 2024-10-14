<x-admin-layout>
    <x-slot name="sidebar">
        @include('layouts.include.sidebar.empresas') <!-- Incluye el sidebar de Main o cualquier otro -->
    </x-slot>




    <div class="flex justify-between p-2 mb-2 text-sm text-black-800 rounded-lg bg-white dark:bg-gray-800 dark:text-blue-400" role="alert">
        <h3 class="text-3xl font-bold dark:text-white">Empresas</h3>
        <a type="button" href="{{ route('empresas.create') }}" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Nuevo</a>
           

      </div>


                    
                                <table id="empresas" class="display" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        
									<th>Nombre</th>
									<th>Tramo</th>
									<th>Tipo</th>
									<th>Nit</th>

                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($empresas as $empresa)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td>{{ $empresa->nombre }}</td>
										<td>{{ $empresa->tramo }}</td>
										<td>{{ $empresa->tipo }}</td>
										<td>{{ $empresa->nit }}</td>

                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                <form action="{{ route('empresas.destroy', $empresa->id) }}" method="POST">
                                                    <a href="{{ route('empresas.show', $empresa->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Show') }}</a>
                                                    <a href="{{ route('empresas.edit', $empresa->id) }}" class="text-indigo-600 font-bold hover:text-indigo-900  mr-2">{{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('empresas.destroy', $empresa->id) }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">{{ __('Delete') }}</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                <script>
                                    $(document).ready(function() {
                                        new DataTable('#empresas', {
                                            responsive: true,
                                        colReorder: true,
                                        keys: true,
                                        lengthMenu: [10, 25, 50, 75, 100, 500, 1000],
                                        layout: {
                                            topStart: {
                                                buttons: [
                                            'colvis',
                                            {
                                                extend: 'excel',
                                                title: 'Empleados para aprobación',  // Título dentro del Excel
                                                filename: 'EmpleadosAprobacion',  // Nombre del archivo Excel
                                                },
                                            'copy',
                                            {
                                                extend: 'pdf',
                                                title: 'Empleados para aprobación',  // Título dentro del PDF
                                                filename: 'EmpleadosAprobacion',  // Nombre del archivo PDF
                                                orientation: 'portrait',  // Orientación del PDF (puede ser 'landscape' o 'portrait')
                                                pageSize: 'A4',  // Tamaño de página
                                                exportOptions: {
                                                    columns: ':visible'  // Exportar solo columnas visibles
                                                },
                                                customize: function (doc) {
                                                    // Personalización del PDF (añadir estilos, colores, etc.)
                                                    doc.styles.title = {
                                                        fontSize: 18,  // Tamaño de fuente del título
                                                        bold: true,  // Título en negrita
                                                        alignment: 'center'  // Alineación del título
                                                    };
                                                    doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                                                }
                                
                                                
                                            },
                                            
                                
                                        ]
                                            },
                                            bottomStart: 'pageLength',
                                            bottom2Start: 'info',
                                            bottom2End: {
                                            searchBuilder: {
                                                // config options here
                                            }
                                        }
                                        },

                                    }); 
                                    });</script>

</x-admin-layout>