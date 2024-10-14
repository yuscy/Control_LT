<x-admin-layout>
    <x-slot name="sidebar">
        @include('layouts.include.sidebar.empresas') <!-- Incluye el sidebar de Main o cualquier otro -->
    </x-slot>

    <div class="flex justify-between p-2 mb-2 text-sm text-black-800 rounded-lg bg-white dark:bg-gray-800 dark:text-blue-400" role="alert">
        <h3 class="text-3xl font-bold dark:text-white">Empresas</h3>
        <a type="button" href="{{ route('empresas.create') }}" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
            Nuevo
        </a>
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
                    <th style="text-align: center" scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $empresa->nombre }}</td>
                    <td>{{ $empresa->tramo }}</td>
                    <td>{{ $empresa->tipo }}</td>
                    <td>{{ $empresa->nit }}</td>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                        <form class="inline-flex rounded-md shadow-sm" role="group" action="{{ route('empresas.destroy', $empresa->id) }}" method="POST" id="miFormulario{{ $empresa->id }}">
                            <a href="{{ route('empresas.show', $empresa->id) }}" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('empresas.edit', $empresa->id) }}" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white"><i class="fa-solid fa-pen-to-square"></i></a>
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('empresas.destroy', $empresa->id) }}" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white" onclick="preguntar{{ $empresa->id }}(event)">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                        </form>
                                        <script>
                                            function preguntar{{ $empresa->id }}(event) {
                                                event.preventDefault();
                                                Swal.fire({
                                                            title: "¿Desea eliminar la empresa?",
                                                            showDenyButton: false,
                                                            icon: 'question',
                                                            showCancelButton: true,
                                                            confirmButtonText: "Eliminar",
                                                            cancelButtonText: "Cancelar",
                                                            confirmButtonColor: "#dc3545",
                                                            
                                                            }).then((result) => {
                                                            /* Read more about isConfirmed, isDenied below */
                                                                if (result.isConfirmed) {
                                                                    document.getElementById("miFormulario{{ $empresa->id }}").submit();
                                                                    
                                                                } 
                                                            });
                                            }
                                        </script>
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
                                title: 'Empleados para aprobación',
                                filename: 'EmpleadosAprobacion',
                            },
                            'copy',
                            {
                                extend: 'pdf',
                                title: 'Empleados para aprobación',
                                filename: 'EmpleadosAprobacion',
                                orientation: 'portrait',
                                pageSize: 'A4',
                                exportOptions: {
                                    columns: ':visible'
                                },
                                customize: function (doc) {
                                    doc.styles.title = {
                                        fontSize: 18,
                                        bold: true,
                                        alignment: 'center'
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
                language: {
                    url: '../DataTables/es-MX.json',
                }
            });
        });
    </script>
</x-admin-layout>
