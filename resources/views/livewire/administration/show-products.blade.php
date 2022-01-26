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
    <div class="container mx-auto">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-12">
                <div class="card" style="background-color: #D290F4">
                    <div class="card-body flex justify-center items-center">
                        @livewire('administration.create-product')
                    </div>
                </div>
            </div>
        </div>
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
                        <tr class="text-center">
                            <td class="px-6 py-4">
                                {{ $product->id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->name_product }}
                            </td>
                            <td class="px-6 py-4">
                                @if ($product->active)
                                    <span class="badge-pill text-green-500 border border-black">
                                        Activo</span>
                                @else <span class="badge-pill text-red-500 border border-red-500">
                                        Inactivo</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->score }}
                            </td>
                            <td class="px-6 py-4">
                                @php
                                    $name = App\Models\Product::NameCategory($product->category_id);
                                @endphp
                                {{ $name }}
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
