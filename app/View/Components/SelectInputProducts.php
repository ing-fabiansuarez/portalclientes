<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\View\Component;

class SelectInputProducts extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $produts = Product::where('active', true)->orderBy('score', 'desc')->get();
        return view('components.select-input-products', compact('produts'));
    }
}
