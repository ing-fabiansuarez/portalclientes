<div>
    <x-jet-secondary-button wire:click="$set('open',true)">
        Añadir
    </x-jet-secondary-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title" class="text-center">
            Agregar al carrito
        </x-slot>
        <x-slot name="content">

        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open',false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-secondary-button wire:click="save">
                Agregar
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
