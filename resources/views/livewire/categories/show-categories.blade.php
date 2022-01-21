<div class="container mx-auto">
    <div class="grid grid-cols-12 gap-5 mb-5">
        @foreach ($categories as $category)
            <div class="col-span-12 xl:col-span-3 md:col-span-6">
                <div class="card">
                    <div class="card-body"><img class="rounded"
                            src="{{ Storage::url($category->image->url) }}" alt="First slide" />
                        <p class="text-xl font-aguacate font-bold mt-4 uppercase">{{ $category->name }} </p>
                        <div class="my-3">
                            <div class="flex justify-between">
                                <p class="bg-primary"> hola mundo</p>
                                <div></div>
                                <button class="btn btn-primary mb-2" type="button">Agregar Productos</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
