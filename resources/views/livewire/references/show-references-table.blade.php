<div class="container mx-auto">
    <div class="grid grid-cols-12 gap-5 mb-5">
        <div class="col-span-12 xl:col-span-4 md:col-span-4">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                            <div class="px-6 pt-4">
                                <form class="w-full max-w-sm">
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
                                </form>
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
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <a href="#"
                                                        class="text-indigo-600 hover:text-indigo-900">Agregar</a>
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
            <div class="card mb-5">
                <div class="card-body">
                    <div class="flex flex-wrap justify-between items-center sm:flex-row"><img
                            class="w-52 h-28 mr-0 mb-3 sm:mr-4 sm:mb-0" src="assets/images/products/iphone-1.jpg" />
                        <div class="flex-1 text-center sm:text-left">
                            <p class="text-lg mb-1 text-center sm:text-left">Portable Speaker with HD
                                Sound</p>
                            <div class="flex items-center mb-3 justify-center sm:justify-start">
                                <p class="mr-1">category: </p><a
                                    class="text-primary-500 hover:text-primary-500" href="#">Speaker
                                </a>
                            </div>
                            <div class="mb-2"><a class="text-primary-500 mb-1">In Stock </a>
                            </div>
                            <div class="inline-flex mr-2 items-center my-4 sm:my-0">
                                <button class="pr-4"><i class="i-Arrow-Left"></i></button>
                                <p class="text-base">01</p>
                                <button class="pl-4"><i class="i-Arrow-Right"></i></button>
                            </div>
                        </div>
                        <div class="text-center">
                            <p class="font-semibold text-2xl mb-3">$50</p>
                            <button class="btn ripple btn-danger-outline mr-2" type="button"> <i
                                    class="i-Close-Window mr-2 align-middle font-semibold"></i>Remove</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
