<div>
    <div wire:loading>
        <!-- Spinner de carga -->
        <div role="status">
            <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
            </svg>
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div wire:loading.remove>
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
    
    </div>

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

</div>
