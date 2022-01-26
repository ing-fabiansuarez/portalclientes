<?php

namespace App\Http\Livewire\Administration;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class CreateProduct extends Component
{
    public $open = false;
    public $name_product, $active=1, $score, $category_id;

    protected $rules = [
        'name_product' => 'required|max:50',
        'active' => 'required',
        'score' => 'required|numeric',
        'category_id' => 'required'
    ];

    public function render()
    {
        $categories = Category::all();
        return view('livewire.administration.create-product', compact('categories'));
    }

    /*Funcion updated valida el formulario sin actualizar o enviar el modal */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();
        Product::create([
            'name_product' => $this->name_product,
            'active' => $this->active,
            'score' => $this->score,
            'category_id' => $this->category_id
        ]);
        $this->reset(['open', 'name_product', 'active', 'score', 'category_id']);
        $this->emit('render');
    }
}
