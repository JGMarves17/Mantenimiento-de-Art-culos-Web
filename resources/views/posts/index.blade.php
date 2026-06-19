<x-admin-layout>
    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-4 border-b border-gray-100">
            <h1 class="text-2xl font-semibold text-gray-800">Artículos</h1>
        </div>

        <div class="p-6">
            @if (session('success'))
                <div class="mb-4 px-4 py-3 rounded bg-green-50 border border-green-200 text-green-700 text-sm">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex justify-end mb-4">
                <a href="{{ route('posts.create') }}"
                   class="inline-flex items-center gap-2 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg shadow">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                    Crear
                </a>
            </div>

            <div class="overflow-x-auto">
                <table id="tablaPosts" class="w-full text-sm">
                    <thead>
                        <tr class="text-left text-gray-700 border-b-2 border-gray-200">
                            <th class="py-2 pr-4">Titulo</th>
                            <th class="py-2 pr-4">Autor</th>
                            <th class="py-2 pr-4">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr class="border-b border-gray-100">
                                <td class="py-3 pr-4 font-semibold text-gray-800">{{ $post->titulo }}</td>
                                <td class="py-3 pr-4 text-gray-600">{{ $post->autor }}</td>
                                <td class="py-3 pr-4">
                                    <a href="{{ route('posts.edit', $post) }}"
                                       class="inline-block px-3 py-1.5 text-blue-600 border border-blue-300 rounded hover:bg-blue-50 text-xs font-medium">
                                        Editar articulo
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @push('styles')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
    @endpush

    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
        <script>
            $(function () {
                $('#tablaPosts').DataTable({
                    columnDefs: [{ orderable: false, targets: 2 }],
                    language: {
                        search: "Buscar:",
                        lengthMenu: "Mostrar _MENU_ registros",
                        info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
                        infoEmpty: "Mostrando 0 a 0 de 0 registros",
                        infoFiltered: "(filtrado de _MAX_ registros)",
                        zeroRecords: "No se encontraron resultados",
                        emptyTable: "No hay artículos registrados",
                        paginate: { first: "Primero", last: "Último", next: "Siguiente", previous: "Anterior" }
                    }
                });
            });
        </script>
    @endpush
</x-admin-layout>