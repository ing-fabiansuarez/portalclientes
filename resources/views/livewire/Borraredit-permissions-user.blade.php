<div>
    <a wire:click="$set('open',true)" style="cursor: pointer;">
        <i class="fas fa-edit">Editar permisos</i>
    </a>
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title" class="text-center">
            Editar permisos usuario
        </x-slot>
        <x-slot name="content">
            <div>
                <x-jet-label value="Editar permisos usuario" />
            </div>
            <x-table>
                @if ($permissions->count())
                    <table class="min-w-full divide-y divide-gray-200" id="Permisos">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Estado
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
                                        
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $permission->id }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $permission->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $permission->description }}
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
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open',false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-secondary-button wire:click="save" wire:loading.attr="disabled" class="disabled:opacity-25">
                Actualizar
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
