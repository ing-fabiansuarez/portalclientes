<div>

    <div class="card">
        <div class="card-body">

            <div class="grid grid-cols-12 gap-5 items-end">
                <div class="col-span-12 xl:col-span-4 lg:col-span-4 md:col-span-12">
                    <div class="font-bold text-lg">Detalle del pedido</div>
                </div>
                <div class="col-span-12 mt-10">
                    <div class="overflow-x-auto pr-10 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                        <div class="align-middle inline-block min-w-full">
                            <table class="basic-table w-full">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Producto</th>
                                        <th></th>
                                        <th>Referencia</th>
                                        <th>Talla</th>
                                        <th>Especificaciones</th>
                                        <th>Cantidad</th>
                                        <th>Costo</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @foreach ($cart as $item)
                                        <tr>
                                            <td>
                                                <div class="flex items-center">
                                                    <div>
                                                        <div class="text-sm leading-5 text-gray-800">
                                                            {{ count($cart) - $loop->iteration + 1 }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                {{ $item->reference->product->name_product }}
                                            </td>
                                            <td>
                                                <img class="avatar-md rounded-full mr-2"
                                                    src="{{ Storage::url(@$item->reference->image->url) }}" />
                                            </td>
                                            <td>
                                                {{ $item->reference->num_ref . ' - ' . $item->reference->name_ref }}
                                            </td>
                                            <td>
                                                {{ $item->size->name }}
                                            </td>
                                            <td>
                                                @if ($item->horma_id != null)
                                                    <b>Horma:</b> {{ $item->horma->name }}
                                                    <br>
                                                @endif
                                                @if ($item->observation != null)
                                                    <b>Observaci&oacute;n:</b> {{ $item->observation->name }}
                                                @endif
                                            </td>
                                            <td class="text-l">{{ $item->quantity_cart }}</td>
                                            <td>$
                                                {{ number_format($item->quantity_cart * $item->reference->product->price()['cost']) }}
                                            </td>
                                            <td>
                                                <button class="btn btn-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-span-9"></div>
                <div class="col-span-12 md:col-span-3">
                    <div class="mt-5">
                        <div class="flex justify-between mb-3">
                            <p class="mr-10">Cantidad: </p>
                            <p class="text-xl">{{ $quantity_total }}</p>
                        </div>
                        {{-- <div class="flex justify-between mb-3">
                            <p class="mr-10">Vat(%):</p>
                            <p>20%</p>
                        </div> --}}
                        <div class="flex justify-between">
                            <p class="mr-10 font-bold">Total:</p>
                            <p class="font-bold text-xl">$ {{ number_format($total) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
