<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Reference;
use PhpParser\Node\Stmt\Echo_;

class OrderController extends Controller
{
    public function viewAddItemToListCart()
    {
        return view('cart.add-item-to-list-cart');
    }

    public function viewShippingInformation()
    {
        //redireccionar a la lista si esta vacia la misma.
        return view('orders.shopping-information');
    }

    public function createOrder()
    {
        return view('orders.checkout-order');
    }
}
