<?php

namespace App\Http\Livewire\Orders;

use App\Models\Reference;
use Livewire\Component;

class ShowReference extends Component
{
    public $reference;
    public $open = false;
    /* protected $rules = [
        'perm.name' => 'required',
        'perm.description' => 'required'
    ]; */

    public function mount(Reference $reference)
    {
        $this->reference=$reference;
    }
    public function render()
    {
        return view('livewire.orders.show-reference');
    }
}
