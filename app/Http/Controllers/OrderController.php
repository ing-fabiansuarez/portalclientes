<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Reference;
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

    public function viewReferncesByCategory(Category $category)
    {
        $references = Reference::where('active_ref', true)->paginate(10);
        return view('orders.show-references', compact('references'));
    }
}
