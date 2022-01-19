<div>
    <a wire:click="$set('open',true)" style="cursor: pointer;" class="ml-2">
        <i class="fas fa-edit">Editar</i>
    </a>
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title" class="text-center">
            Editar usuario
        </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Nombre"></x-jet-label>
                <x-jet-input wire:model="user.name" type="text" class="w-full" />
                <x-jet-input-error for="user.name" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Apeliido"></x-jet-label>
                <x-jet-input wire:model="user.surname" type="text" class="w-full" />
                <x-jet-input-error for="user.surname" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Tipo de identificacion"></x-jet-label>
                <x-select-input-type-identifications />
                <x-jet-input-error for="user.type_identify_id" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Numero de identificacion"></x-jet-label>
                <x-jet-input wire:model="user.identify_number" type="number" class="w-full" />
                <x-jet-input-error for="user.identify_number" />
            </div>
            <div class="mb-4">
                <x-jet-label for="number_phone" value="Telefono" />
                <x-jet-input wire:model="number_phone1" class="block mt-1 w-full" type="number" />
                <x-jet-input-error for="number_phone1" />
            </div>
            <div class="mb-4">
                <x-jet-label for="number_phone2" value="Telefono 2" />
                <x-jet-input wire:model="number_phone2" class="block mt-1 w-full" type="number"/>
                <x-jet-input-error for="number_phone2" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Email"></x-jet-label>
                <x-jet-input wire:model="user.email" type="text" class="w-full" />
                <x-jet-input-error for="user.email" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Rol"></x-jet-label>
                <x-select-input-roles />
                <x-jet-input-error for="user.rol_id" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open',false)">
                Salir
            </x-jet-secondary-button>
            <x-jet-secondary-button wire:click="save" wire:loading.attr="disabled" class="disabled:opacity-25">
                Actualizar
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
