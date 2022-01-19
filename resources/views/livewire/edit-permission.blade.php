<div>
    <a wire:click="$set('open',true)" style="cursor: pointer;">
        <i class="fas fa-edit">Editar</i>
    </a>
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title" class="text-center">
            Editar permiso
        </x-slot>
        <x-slot name="content">
            <div>
                <x-jet-label value="Editar permiso" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Nombre"></x-jet-label>
                <x-jet-input wire:model="perm.name" type="text" class="w-full" />
                <x-jet-input-error for="perm.name" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Descripcion"></x-jet-label>
                <textarea
                    class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    rows="4" wire:model="perm.description"></textarea>
                <x-jet-input-error for="perm.description" />
            </div>
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
