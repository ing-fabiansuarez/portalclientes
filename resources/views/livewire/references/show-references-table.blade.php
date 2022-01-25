<div class="container mx-auto">
    <div class="grid grid-cols-12 gap-5 mb-5">
        <div class="col-span-12 xl:col-span-4 md:col-span-4">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                            <div class="px-6 pt-4">

                                <div class="md:flex md:items-center">
                                    <div class="md:w-1/3">
                                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                            for="inline-full-name">
                                            Producto
                                        </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <x-select-input-products wire:model="idProduct"
                                            category="{{ $category->id }}" />
                                    </div>
                                </div>
                                <div class="md:flex md:items-center">
                                    <div class="md:w-1/3">
                                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                            for="inline-full-name">
                                            Referencia
                                        </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <x-jet-input type="text" wire:model="ref" class="w-full" />
                                    </div>
                                </div>
                            </div>
                            @if ($references->count())
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Referencias
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($references as $ref)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0 h-10 w-10">
                                                            <img class="h-10 w-10 rounded-full"
                                                                src="{{ Storage::url(@$ref->image->url) }}" alt="">
                                                        </div>
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">
                                                                Ref. {{ $ref->num_ref . ' - ' . $ref->name_ref }}
                                                            </div>
                                                            <div class="text-sm text-gray-500">
                                                                {{ $ref->product->name_product }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                    @livewire('add-item-cart',['reference'=>$ref],key($ref->id))
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div class="mx-4 py-4">
                                    No existe ning&uacute;n registro coincidente.
                                </div>
                            @endif


                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-span-12 xl:col-span-8 md:col-span-8">
            @livewire('cart.list-items-cart')
        </div>

    </div>
</div>
