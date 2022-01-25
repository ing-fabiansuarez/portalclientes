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
         {{-- @livewire('administration.create-product') --}}
    </div>
    <div class="flex justify-center mb-4">
        <select wire:model="id_product"
            class="h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline">
            @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name_product }}</option>
            @endforeach
        </select>
    </div>
    <div class="flex justify-center mb-4">
        <x-jet-input wire:model="search" type="number" placeholder="Busqueda por N° referencia" style="width: 25rem" />
    </div>
    <x-table>
        @if ($references->count())
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th scope="col" class="cursor-pointer px-6 py-3 text-xs font-medium uppercase tracking-wider"
                            wire:click="order('num_ref')">
                            N° Referencia
                            <i class="fas fa-sort"></i>
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium uppercase tracking-wider">
                            Nombre
                        </th>
                        <th scope="col" class="cursor-pointer px-6 py-3 text-xs font-medium uppercase tracking-wider"
                            wire:click="order('active_ref')">
                            Estado
                            <i class="fas fa-sort"></i>
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium uppercase tracking-wider">
                            Accion
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($references as $reference)
                        <tr>
                            <td class="px-3 py-2">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="avatar rounded-full" src="{{ asset('assets/img/SinImagen.png') }}"
                                            alt="{{ $reference->name_ref }}" />
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-black">
                                            Ref: {{ $reference->num_ref }}
                                        </div>
                                        <div class="text-sm text-gray-700">
                                            {{ $reference->name_product }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-3 py-2 text-center">
                                {{ $reference->name_ref }}
                            </td>
                            <td class="px-3 py-2 text-center">
                                {{ $reference->active_ref }}
                            </td>
                            <td class="px-3 py-2 flex">
                                @livewire('administration.edit-reference',['id_reference'=>$reference->id],key($reference->id))
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="px-6 py-4 text-center">
                No existe ninguna referencia con esta busqueda
            </div>
        @endif
    </x-table>
</div>
