<div class="container mx-auto">
    <div class="grid grid-cols-12 gap-5 mb-5">
        @foreach ($products as $products)
            <div class="col-span-12 xl:col-span-3 md:col-span-6">
                <div class="card overflow-hidden relative"><img src="#" />
                    <div class="card-body">
                        <div class="mb-1">
                            <a class="text-gray-600 hover:text-gray-700" href="#">
                                {{ $products->name_product }}
                            </a>
                        </div>
                        <p class="font-semibold mb-4">{{ $products->category_idcategory }}</p>
                        
                        <div class="flex justify-between flex-wrap">
                            <button class="btn ripple btn-primary mb-2" type="button">Ver Productos</button>
                            <button class="btn btn-primary-outline mb-2" type="button">Ver Productos</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
