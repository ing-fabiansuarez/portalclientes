<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list()
    {
        return view('orders.create-order');
    }

    public function viewReferncesByProduct(Product $product)
    {
        dd($product->references());
        return view('orders.show-references-by-product', compact('product'));
    }
}
