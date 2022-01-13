<div>
    <a class="text-indigo-600 hover:text-indigo-900" wire:click="$set('open',true)">Cambiar permisos</a>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title" class="text-center">
            Permisos usuario
        </x-slot>
        <x-slot name="content">
            <div>
                <x-jet-label value="Listado de permisos" />
            </div>
            <div style="text-align:center;">
                <table class="table" style="margin: 0 auto;">
                    <thead>
                        <tr>
                            <th>Estado</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($userPermissions as $permission)
                            <tr>
                                <td>
                                    
                                </td>
                                <td>{{ $permission->name }}</td>
                                <td>{{ $permission->description }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open',false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-secondary-button wire:click="save">
                Actualizar
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
