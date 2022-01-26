<div>
    @push('css')
        <style>
            input[type=checkbox] {
                transform: scale(2);
            }

            #Button {
                cursor: pointer;
            }

        </style>
    @endpush

    <a wire:click="$set('open',true)" id="Button"
        class="inline-flex items-center px-1 py-2 bg-amber-100 border-1 border-red-300 rounded-3xl text-black hover:text-slate-900">
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

            <div class="mb-4 flex justify-center text-center">
                <div class="mr-4">
                    <x-jet-label value="Estado" class="mb-2"></x-jet-label>
                    <div class="cursor-pointer ml-2">
                        @if ($product->active == 0)
                            <label class="switch">
                                <input class="CheckBoxState" type="checkbox" data-onstyle="success"
                                    data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive"
                                    data-product="{{ $product->id }}" wire:model="product.active">
                                <span class="slider round ml-3">--Inactivo</span>
                            </label>
                        @else
                            <label class="switch">
                                <input class="CheckBoxState" type="checkbox" data-onstyle="success"
                                    data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive"
                                    data-product="{{ $product->id }}" checked wire:model="product.active">
                                <span class="slider round ml-3">--Activo</span>
                            </label>
                        @endif
                    </div>
                </div>
                <div class="ml-4">
                    <x-jet-label value="Puntuacion"></x-jet-label>
                    <x-jet-input wire:model="product.score" type="number" class="w-full" />
                    <x-jet-input-error for="product.score" />
                </div>

            </div>

            <div class="mb-4">
                <x-jet-label value="Categoria"></x-jet-label>
                <select wire:model="product.category_id"
                    class="h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline"
                    id="select">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}</option>
                    @endforeach
                </select>
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
