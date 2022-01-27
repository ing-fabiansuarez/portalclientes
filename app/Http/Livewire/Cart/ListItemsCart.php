<?php

namespace App\Http\Livewire\Cart;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ListItemsCart extends Component
{
    protected $listeners = [
        'render',
        'delete'
    ];
    public function render()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $cart = $user->cart();
        return view('livewire.cart.list-items-cart', [
            'cart' => $cart['items'],
            'total' => $cart['price_products'],
            'quantity_total' => $cart['quantity_total']
        ]);
    }

    public function delete(Cart $cart)
    {
        $cart->delete();
    }
}
