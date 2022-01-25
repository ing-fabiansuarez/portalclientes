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
            Editar producto {{ $product->name_product }}
        </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Nombre del producto"></x-jet-label>
                <x-jet-input wire:model="product.name_product" type="text" class="w-full" />
                <x-jet-input-error for="product.name_product" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Estado" class="mb-1"></x-jet-label>
                <div class="cursor-pointer ml-2">
                    @if ($product->active == 0)
                        <label class="switch">
                            <input id="permission" class="CheckBoxState" type="checkbox" data-onstyle="success"
                                data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive"
                                data-product="{{ $product->id }}" wire:model="product.active">
                            <span class="slider round ml-2">Inactivo</span>
                        </label>
                    @else
                        <label class="switch">
                            <input id="permission" class="CheckBoxState" type="checkbox" data-onstyle="success"
                                data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive"
                                data-product="{{ $product->id }}" checked wire:model="product.active">
                            <span class="slider round ml-2">Activo</span>
                        </label>
                    @endif
                </div>
            </div>
            <div class="mb-4">
                <x-jet-label value="Puntuacion"></x-jet-label>
                <x-jet-input wire:model="product.score" type="number" class="w-full" />
                <x-jet-input-error for="product.score" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Categoria"></x-jet-label>
                <select wire:model="product.category_id">
                    @foreach ($categories as $category)
                        @if ($product->category_id == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @endif
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <x-jet-input wire:model="product.category_id" type="text" class="w-full" />
                <x-jet-input-error for="product.category_id" />
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
