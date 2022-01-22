<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use App\Models\Reference;
use Livewire\Component;
use Livewire\WithPagination;

class ShowProducts extends Component
{
    use WithPagination;

    public function render()
    {
        $products = Product::where('active', true)->orderBy('score', 'desc')->get();
        return view('livewire.products.show-products')
            ->with('products', $products);
    }
}
