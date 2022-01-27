<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Reference;

class OrderController extends Controller
{
    public function viewAddItemToListCart()
    {
        return view('cart.add-item-to-list-cart');
    }

    public function viewShippingInformation()
    {
    }
}
