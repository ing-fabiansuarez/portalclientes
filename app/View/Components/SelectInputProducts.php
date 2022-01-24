<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\View\Component;

class SelectInputProducts extends Component
{

    public $category;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($category = "")
    {
        $this->category = $category;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $produts = Product::where('active', true)->where('category_id', $this->category)->orderBy('score', 'desc')->get();
        return view('components.select-input-products', compact('produts'));
    }
}
