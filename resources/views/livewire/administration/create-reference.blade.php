<div>
    <x-jet-secondary-button wire:click="$set('open',true)">
        Crear nueva referencia
    </x-jet-secondary-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title" class="text-center">
            Crear nuevo referencia
        </x-slot>
        <x-slot name="content">

            <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative w-full"
                wire:loading wire:target="image">
                <strong class="font-bold">!Cargando la imagen¡</strong>
                <span class="block sm:inline">Espere un momento...</span>
            </div>

            @if ($image)
                <div class="mb-4">
                    <img src="{{ $image->temporaryUrl() }}">
                </div>
            @endif


            <div class="mb-4">
                <input type="file" wire:model="image">
                <x-jet-input-error for="image" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Tipo de producto"></x-jet-label>
                <select wire:model="product_id" class="w-full">
                    <option value="">--Seleccione un tipo de producto</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">
                            {{ $product->name_product }}</option>
                    @endforeach
                </select>
                <x-jet-input-error for="product_id" />
            </div>


            <div class="mb-4 flex justify-center text-center">
                <div class="mr-4">
                    <x-jet-label value="N° de referencia"></x-jet-label>
                    <x-jet-input wire:model="num_ref" type="number" class="w-full" />
                    <x-jet-input-error for="num_ref" />
                </div>
                <div class="ml-4">
                    <x-jet-label value="Estado" class="mb-2"></x-jet-label>
                    <div class="cursor-pointer ml-2">
                        @if ($active_ref == 0)
                            <label class="switch">
                                <input class="CheckBoxState" type="checkbox" data-onstyle="success"
                                    data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive"
                                    wire:model="active_ref">
                                <span class="slider round ml-3">-Inactivo</span>
                            </label>
                        @else
                            <label class="switch">
                                <input class="CheckBoxState" type="checkbox" data-onstyle="success"
                                    data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive"
                                    wire:model="active_ref" checked>
                                <span class="slider round ml-3">-Activo</span>
                            </label>
                        @endif
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <x-jet-label value="Nombre de la referencia"></x-jet-label>
                <x-jet-input wire:model="name_ref" type="text" class="w-full" />
                <x-jet-input-error for="name_ref" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open',false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-secondary-button wire:click="save" wire:loading.attr="disabled" wire:target="save,image"
                class="disabled:opacity-25">
                Guardar
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
