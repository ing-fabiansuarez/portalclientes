<div>
    @livewire('create-permission')
    @if ($permissions->count())
        <x-table>
            <table class="min-w-full divide-y divide-gray-200" id="Permisos">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Id
                        </th>
                        <th scope="col"
                            class=" px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nombre
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Descripcion
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
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
                            <td class="px-6 py-4">
                                @livewire('edit-permissions',['permission'=>$permission],key($permission->id))
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
</div>
