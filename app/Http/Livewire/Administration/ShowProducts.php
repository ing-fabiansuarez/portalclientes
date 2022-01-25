<?php

namespace App\Http\Livewire\Administration;

use App\Models\Product;
use Livewire\Component;

class ShowProducts extends Component
{
    public $sort = 'id';
    public $direction = 'asc';
    protected $listeners=['render'=>'render'];
    public function render()
    {
        $products = Product::orderBy($this->sort, $this->direction)->get();
        return view('livewire.administration.show-products', compact('products'));
    }
    public function order($sort)
    {
        if ($this->sort == $sort) {
            if ($this->direction == "desc") {
                $this->direction = "asc";
            } else {
                $this->direction = "desc";
            }
        } else {
            $this->sort = $sort;
            $this->direction = "desc";
        }
    }
}
