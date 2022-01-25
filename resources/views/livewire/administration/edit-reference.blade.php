<div>
    @push('css')
        <style>
            input[type=checkbox] {
                transform: scale(2);
            }

        </style>
    @endpush

    <a wire:click="$set('open',true)" style="cursor: pointer;">
        <i class="fas fa-edit">Editar</i>
    </a>
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title" class="text-center">
            Editar referencia {{ $reference->name_ref }}
        </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Tipo de producto"></x-jet-label>
                <select wire:model="reference.product_id" class="w-full">
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}" {{ $reference->product_id ? 'selected' : '' }}>
                            {{ $product->name_product }}</option>
                    @endforeach
                </select>
                <x-jet-input-error for="reference.product_id" />
            </div>
            <div class="mb-4">
                <x-jet-label value="N° de referencia"></x-jet-label>
                <x-jet-input wire:model="reference.num_ref" type="number" class="w-full" />
                <x-jet-input-error for="reference.num_ref" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Nombre de la referencia"></x-jet-label>
                <x-jet-input wire:model="reference.name_ref" type="text" class="w-full" />
                <x-jet-input-error for="reference.name_ref" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Estado" class="mb-2"></x-jet-label>
                <div class="cursor-pointer ml-2">
                    @if ($reference->active_ref == 0)
                        <label class="switch">
                            <input class="CheckBoxState" type="checkbox" data-onstyle="success" data-offstyle="danger"
                                data-toggle="toggle" data-on="Active" data-off="InActive"
                                wire:model="reference.active_ref">
                            <span class="slider round ml-3">-Inactivo</span>
                        </label>
                    @else
                        <label class="switch">
                            <input class="CheckBoxState" type="checkbox" data-onstyle="success" data-offstyle="danger"
                                data-toggle="toggle" data-on="Active" data-off="InActive"
                                wire:model="reference.active_ref" checked>
                            <span class="slider round ml-3">-Activo</span>
                        </label>
                    @endif
                </div>
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
