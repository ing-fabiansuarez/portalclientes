<div>
    <x-jet-secondary-button wire:click="$set('open',true)">
        Crear permiso
    </x-jet-secondary-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title" class="text-center">
            Crear nuevo permiso
        </x-slot>
        <x-slot name="content">
            <div>
                <x-jet-label value="Crear permiso" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Nombre"></x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model.defer="name"></x-jet-input>
            </div>
            <div class="mb-4">
                <x-jet-label value="Descripcion"></x-jet-label>
                <textarea
                    class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    rows="4" wire:model.defer="description"></textarea>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open',false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-secondary-button wire:click="save">
                Guardar
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
