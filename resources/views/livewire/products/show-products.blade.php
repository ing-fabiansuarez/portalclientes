<div class="container mx-auto">
    <div class="grid grid-cols-12 gap-5 mb-5">
        @foreach ($products as $product)
            <div class="col-span-12 @if ($loop->first)xl:col-span-3 @else xl:col-span-3 @endif  md:col-span-6">
                <div class="card overflow-hidden relative"><img src="{{ '#' }}" />
                    <div class="card-body">
                        <div class="mb-1">
                            <a class="text-gray-600 hover:text-gray-700" href="#">
                                {{ $product->name_product }}
                            </a>
                        </div>
                        <p class="font-semibold mb-4">{{ $product->category_idcategory }}</p>
                        <div class="flex justify-items-end">
                            <a href="{{route('references_by_product',$product)}}" class="btn btn-primary mb-2" >Agregar Productos</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
