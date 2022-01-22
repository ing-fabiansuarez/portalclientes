<?php

namespace App\Http\Livewire\Orders;

use App\Models\Prices;
use App\Models\Product;
use App\Models\Reference;
use Livewire\Component;

class Order extends Component
{
    public function render()
    {
        $product = Product::find(1);
        $references = Reference::where('product_id', $product->id)
            ->where('active_ref', '=', 1)->get();
        $price = Prices::where('product_id', $product->id)->first();
        return view('livewire.orders.order', compact('product', 'references', 'price'));
    }
}
