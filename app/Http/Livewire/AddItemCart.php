<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddItemCart extends Component
{
    public $open = false;
    public $reference;

    public function mount($reference)
    {
        $this->reference = $reference;
    }


    public function render()
    {
        return view('livewire.add-item-cart');
    }
}
