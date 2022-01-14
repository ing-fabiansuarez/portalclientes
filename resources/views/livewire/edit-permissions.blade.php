<div>
    <a class="text-indigo-600 hover:text-indigo-900" wire:click="$set('open',true)">Cambiar permisos</a>
    <x-jet-input>hhhh</x-input>
    <x-jet-confirmation-modal wire:model="open">
    <x-slot name="title">
        Delete Account
    </x-slot>

    <x-slot name="content">
        Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted.
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
            Nevermind
        </x-jet-secondary-button>

        <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
            Delete Account
        </x-jet-danger-button>
    </x-slot>
</x-jet-confirmation-modal>
    <!-- <x-jet-dialog-modal wire:model="open">
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
                        
                    </tbody>
                </table>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open',false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-secondary-button >
                Actualizar
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal> -->
</div>
