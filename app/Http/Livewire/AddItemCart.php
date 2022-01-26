<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddItemCart extends Component
{
    public $open = false;
    public $reference;

    public $inputHorma, $inputSize, $inputObs, $inputQuantity = 1;

    protected $rules = [
        'inputHorma' => 'required'
    ];

    public function mount($reference)
    {
        $this->reference = $reference;
    }

    public function render()
    {
        return view('livewire.add-item-cart');
    }

    public function save()
    {
        $this->validate();
        Cart::create([
            'reference_id' => $this->reference->id,
            'size_id' => $this->inputSize,
            'horma_id' => $this->inputHorma,
            'observation_id' => $this->inputObs,
            'quantity_cart' =>  $this->inputQuantity,
            'user_id' => Auth::user()->id,
            'sold_out_cart' => false,
        ]);
        $this->reset('open', 'inputHorma', 'inputSize', 'inputObs', 'inputQuantity');
        $this->emit('render');
        $this->emit('alert', 'Se agrego a la lista de pedido');
    }
}
