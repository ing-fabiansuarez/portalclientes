<div>
    <x-jet-secondary-button wire:click="$set('open',true)">
        Crear producto
    </x-jet-secondary-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title" class="text-center">
            Crear nuevo producto
        </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Nombre del producto"></x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model="name_product"></x-jet-input>
                <x-jet-input-error for="name_product" />
            </div>
            <div class="mb-4 flex justify-center text-center">
                <div class="mr-4">
                    <x-jet-label value="Estado" class="mb-2"></x-jet-label>
                    <div class="cursor-pointer ml-2">
                        @if ($active == 0)
                            <label class="switch w-1/2">
                                <input class="CheckBoxState" type="checkbox" data-onstyle="success"
                                    data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive"
                                    wire:model="active">
                                <span class="slider round ml-3">-Inactivo</span>
                            </label>
                        @else
                            <label class="switch w-1/2">
                                <input class="CheckBoxState" type="checkbox" data-onstyle="success"
                                    data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive"
                                    wire:model="active" checked>
                                <span class="slider round ml-3">-Activo</span>
                            </label>
                        @endif
                    </div>
                </div>
                <div class="ml-4">
                    <x-jet-label value="Puntuacion"></x-jet-label>
                    <x-jet-input type="number" class="w-1/2" wire:model="score"></x-jet-input>
                    <x-jet-input-error for="score" />
                </div>

            </div>
            <div class="mb-4 w-1/2 flex justify-center text-center">
                <div>
                    <x-jet-label value="Categoria"></x-jet-label>
                    <select wire:model="category_id">
                        <option value="">-- Seleccione una categoria</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="category_id" />
                </div>

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
