<div>
    <div class="grid grid-cols-4">
        @foreach ($references as $reference)
            <div class="flex justify-center items-center bg-gray-100" style="max-width: 28rem">
                <div
                    class="bg-white shadow-md h-96 mx-3 rounded-3xl flex flex-col justify-around items-center overflow-hidden sm:flex-row sm:h-52 sm:w-3/5 md:w-96">
                    <img class="h-1/2 w-full sm:h-full sm:w-1/2 object-cover" {{-- src="{{ $reference->image->url }}" --}}
                        alt="{{ $reference->num_ref }}" />
                    <div
                        class="flex-1 w-full flex flex-col items-center justify-center h-1/2 pl-6 sm:h-full sm:items-baseline sm:w-1/2
            ">
                        <div class="flex flex-col justify-center align-middle">
                            <h1 class="text-lg font-normal mb-0 text-gray-600 font-sans">
                                Ref:{{ $reference->num_ref }} {{ $reference->name_ref }}
                            </h1>
                            <span class="text-xs text-indigo-300 mt-0">{{ $product->name_product }}</span>
                            <h1 class="font-bold text-gray-500">$200</h1>
                        </div>
                        <div>
                            @livewire('orders.show-reference')
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
