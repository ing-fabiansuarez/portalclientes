<div>
    @push('css')
        <style>
            thead,
            th {
                background-color: #D290F4;
                font-style: italic;
                color: white;
            }

            table tbody tr:nth-child(odd) {
                background-color: #fff;
                color: black
            }

            table tbody tr:nth-child(even) {
                background-color: #e9bdff;
                color: rgb(0, 0, 0)
            }

        </style>
    @endpush
    <div class="flex justify-center mb-4">
        @livewire('administration.create-product')
    </div>
    <x-table>
        @if ($products->count())
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th scope="col" class="cursor-pointer px-6 py-3 text-xs font-medium uppercase tracking-wider"
                            wire:click="order('id')">
                            Id
                            <i class="fas fa-sort"></i>
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium uppercase tracking-wider">
                            Nombre
                        </th>
                        <th scope="col" class="cursor-pointer px-6 py-3 text-xs font-medium uppercase tracking-wider"
                            wire:click="order('active')">
                            Estado
                            <i class="fas fa-sort"></i>
                        </th>
                        <th scope="col" class="cursor-pointer px-6 py-3 text-xs font-medium uppercase tracking-wider"
                            wire:click="order('score')">
                            Score
                            <i class="fas fa-sort"></i>
                        </th>
                        <th scope="col" class="cursor-pointer px-6 py-3 text-xs font-medium uppercase tracking-wider"
                            wire:click="order('category_id')">
                            Categoria
                            <i class="fas fa-sort"></i>
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium uppercase tracking-wider">
                            Accion
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($products as $product)
                        <tr>
                            <td class="px-6 py-4">
                                {{ $product->id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->name_product }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->active }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->score }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->category_id }}
                            </td>
                            <td class="px-6 py-4 flex">
                                @livewire('administration.edit-products',['product'=>$product],key($product->id))
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                @if ($products->hasPages())
                    <div class="px-6 py-4">
                        {{ $products->links() }}
                    </div>
                @endif

            </table>
        @else
            <div class="px-6 py-4">
                No existe ningun producto
            </div>
        @endif
    </x-table>
</div>
