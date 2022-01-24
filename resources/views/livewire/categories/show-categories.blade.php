<div class="container mx-auto">
    <div class="grid grid-cols-12 gap-5 mb-5">
        @foreach ($categories as $category)
            <div class="col-span-12 xl:col-span-3 md:col-span-6">
                <div class="card background-card-fabian bg-primary">
                    <div class="card-body">{{-- <img class="rounded"
                            src="{{ Storage::url(@$category->image->url) }}" alt="First slide" /> --}}
                        <p class="text-xl font-aguacate font-bold mt-4 uppercase">{{ $category->name }} </p>
                        <div class="my-3">
                            <div class="flex justify-between">

                                <div></div>
                                <a href="{{ route('references_by_category', $category) }}"
                                    class="btn bg-white text-black mb-2 hover:bg-primary-50">Agregar Productos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xl:col-span-1">
            </div>
        @endforeach
    </div>
</div>
