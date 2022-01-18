<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list()
    {
        $products = Product::where('active', true)->orderBy('score', 'desc')->get();
        return view('orders.create-order')->with('products', $products);
    }
}
