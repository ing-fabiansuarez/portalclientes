<?php

namespace App\Http\Livewire\Administration;

use App\Models\Product;
use App\Models\Reference;
use Livewire\Component;

class EditReference extends Component
{
    public $reference;
    public $open = false;
    protected $rules = [
        'reference.num_ref' => 'required|numeric',
        'reference.product_id' => 'required',
        'reference.name_ref' => 'required|string',
        'reference.active_ref' => 'required'
    ];
    public function mount($id_reference)
    {
        $this->reference = Reference::find($id_reference);
    }

    public function render()
    {
        $products = Product::all();
        return view('livewire.administration.edit-reference', compact('products'));
    }

    public function save()
    {
        $this->validate();
        $this->reference->save();
        $this->reset(['open']);
        $this->emitTo('administration.show-references', 'render');
    }
}
