<div>
    <a class="btn-icon" wire:click="$set('open',true)">
        <i class="fas fa-upload "></i> Agregar
    </a>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name='title'>
            <div class="text-purple-600">Ref {{ $reference->num_ref }} de
                {{ $reference->product->name_product }}
            </div>
        </x-slot>
        <x-slot name='content'>
            <div class="flex flex-wrap justify-items-center items-center sm:flex-row">
                <img class="text-center h-60 mr-0 mb-3 sm:mr-4 sm:mb-0 rounded-md"
                    src="{{ Storage::url(@$reference->image->url) }}">


                <div class="flex-1 text-center sm:text-left">
                    @if (count($reference->hormas()) > 0)
                        <div class="my-4 px-3">
                            <x-jet-label class="text-base" value="Horma" />
                            <div class="mb-3 xl:w-96">
                                <select wire:model.defer="inputHorma"
                                    class="form-select appearance-none
                                        block
                                        w-full
                                        px-2
                                        py-1
                                        text-base
                                        font-normal
                                        text-gray-700
                                        bg-white bg-clip-padding bg-no-repeat
                                        border border-solid border-gray-300
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label="Default select example">
                                    <option value=""> -- Seleccione -- </option>
                                    @foreach ($reference->hormas() as $horma)
                                        <option value="{{ $horma['id'] }}">{{ $horma['name'] }}</option>
                                    @endforeach
                                </select>
                                <x-jet-input-error for="inputHorma" />
                            </div>
                        </div>
                    @endif

                    @if (count($reference->sizes()) > 0)
                        <div class="mb-4 px-3">
                            <x-jet-label class="text-base" value="Talla" />
                            <div class="mb-3 xl:w-96">
                                <select wire:model.defer="inputSize"
                                    class="form-select form-select-sm appearance-none
                                        block
                                        w-full
                                        px-2
                                        py-1
                                        text-base
                                        font-normal
                                        text-gray-700
                                        bg-white bg-clip-padding bg-no-repeat
                                        border border-solid border-gray-300
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label="Default select example">
                                    <option value=""> -- Seleccione -- </option>
                                    @foreach ($reference->sizes() as $size)
                                        <option value="{{ $size['id'] }}">{{ $size['name'] }}</option>
                                    @endforeach
                                </select>
                                <x-jet-input-error for="inputSize" />
                            </div>
                        </div>
                    @endif

                    @if (count($reference->observations()) > 0)
                        <div class="mb-4 px-3">
                            <x-jet-label class="text-base" value="Observación" />
                            <div class="mb-3 xl:w-96">
                                <select wire:model.defer="inputObs"
                                    class="form-select form-select-sm appearance-none
                                        block
                                        w-full
                                        px-2
                                        py-1
                                        text-base
                                        font-normal
                                        text-gray-700
                                        bg-white bg-clip-padding bg-no-repeat
                                        border border-solid border-gray-300
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label="Default select example">
                                    <option value="">Ninguna</option>
                                    @foreach ($reference->observations() as $obs)
                                        <option value="{{ $obs['id'] }}">{{ $obs['name'] }}</option>
                                    @endforeach
                                </select>
                                <x-jet-input-error for="inputObs" />
                            </div>
                        </div>
                    @endif

                    <div class="mb-4 px-3">
                        <x-jet-label value="Cantidad" />
                        <div class="inline-flex mr-2 items-center my-4 sm:my-0">
                            <button class="pr-4"><i class="i-Arrow-Left"></i></button>
                            <x-jet-input wire:model.defer="inputQuantity" class="w-8 text-center" />
                            <button class="pl-4"><i class="i-Arrow-Right"></i></button>
                        </div>
                        <x-jet-input-error for="inputQuantity" />
                    </div>
                </div>
                <div class="text-center">
                    <p class="font-semibold text-2xl mb-3">$
                        {{ number_format($reference->product->price()['cost']) }}
                    </p>
                </div>
            </div>
        </x-slot>
        <x-slot name='footer'>
            <button wire:click="save" class="btn ripple btn-primary-outline mr-2" type="button">
                <i class="fas fa-upload mr-2 align-middle font-semibold"></i>Agregar al carrito
            </button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
