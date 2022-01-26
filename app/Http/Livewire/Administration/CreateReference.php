<?php

namespace App\Http\Livewire\Administration;

use App\Models\Image;
use App\Models\Product;
use App\Models\Reference;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateReference extends Component
{
    use WithFileUploads;
    public $open = false;
    public $num_ref, $product_id, $name_ref, $active_ref = 1, $image, $eraser;

    protected $rules = [
        'num_ref' => 'required|numeric',
        'product_id' => 'required',
        'name_ref' => 'required',
        'active_ref' => 'required',
        'image' => 'required|image|max:2048'
    ];

    public function mount()
    {
        $this->eraser = rand();
    }
    public function render()
    {
        $products = Product::all();
        return view('livewire.administration.create-reference', compact('products'));
    }

    /*Funcion updated valida el formulario sin actualizar o enviar el modal */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();
        /* $this->image=$this->image->getClientOriginalName(); */
        $NameCarpet = Product::select('name_product')->where('id', $this->product_id)->first();
        $img = $this->image->store('public/references/' . $NameCarpet->name_product);
        Reference::create([
            'num_ref' => $this->num_ref,
            'product_id' => $this->product_id,
            'name_ref' => $this->name_ref,
            'active_ref' => $this->active_ref
        ]);
        $new_reference = Reference::where('num_ref', $this->num_ref)
            ->where('product_id', $this->product_id)->first();
        Image::create([
            'url' => $img,
            'imageable_id' => $new_reference->id,
            'imageable_type' => 'App\Models\Reference'
        ]);
        $this->reset(['open', 'num_ref', 'product_id', 'name_ref', 'active_ref', 'image']);
        $this->eraser = rand();
        $this->emit('render');
    }
}
