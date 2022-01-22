<div>
    @push('css')
        <style>
            thead,
            th {
                background-color: #D290F4;
                font-style: italic;
                color: white;
            }

            table tbody tr:nth-child(odd) {
                background-color: #fff;
                color: black
            }

            table tbody tr:nth-child(even) {
                background-color: #e9bdff;
                color: rgb(0, 0, 0)
            }

        </style>
    @endpush
    <div class="flex justify-center mb-4">
        @livewire('create-permission')
    </div>
    <x-table>
        @if ($permissions->count())
            <table class="min-w-full" id="Permisos">
                <thead>
                    <tr>
                        <th scope="col" class="px-6 py-3 text-xs font-medium uppercase tracking-wider">
                            Id
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium uppercase tracking-wider">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium uppercase tracking-wider">
                            Descripcion
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium uppercase tracking-wider">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($permissions as $permission)
                        <tr>
                            <td class="px-6 py-4">
                                {{ $permission->id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $permission->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $permission->description }}
                            </td>
                            <td class="px-6 py-4 flex">
                                @livewire('edit-permissions',['permission'=>$permission],key($permission->id))
                                <a class="ml-4"
                                    wire:click="$emit('deletePermission',{{ $permission->id }})">
                                    <i class="fas fa-trash">Eliminar</i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="px-6 py-4">
                No existe ningun permiso
            </div>
        @endif
    </x-table>
    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Livewire.on('deletePermission', permId => {
                Swal.fire({
                    title: '¿Estas seguro de eliminar el permiso?',
                    text: "...",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, lo quiero eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emitTo('show-permissions', 'delete', permId)
                        Swal.fire(
                            'Eliminado!',
                            'El permiso fue eliminado correctamente',
                            'success'
                        )
                    }
                })
            });
        </script>
    @endpush
</div>
