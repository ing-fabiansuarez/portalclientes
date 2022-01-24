<?php

namespace App\Http\Livewire\Administration;

use App\Models\Product;
use Livewire\Component;

class EditProducts extends Component
{
    public $product;
    public $open = false;
    protected $rules = [
        'product.name_product' => 'required',
        'product.score' => 'required',
        'product.category_id' => 'required',
    ];
    public function mount(Product $product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.administration.edit-products');
    }
    public function save()
    {
        /* $this->validate();
        $this->perm->save();
        $this->reset(['open']);
        $this->emitTo('show-permissions', 'render'); */
    }
}
