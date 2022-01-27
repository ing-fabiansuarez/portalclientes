<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Reference;

class OrderController extends Controller
{
    public function viewAddItemToListCart()
    {
        $references = Reference::where('active_ref', true)->paginate(10);
        return view('cart.add-item-to-list-cart', [
            'references' => $references,
        ]);
    }


    public function showCategories()
    {
        return view('cart.show-categories');
    }

    public function viewReferncesByProduct(Product $product)
    {
        dd($product->references());
        return view('orders.show-references-by-product', compact('product'));
    }
}
