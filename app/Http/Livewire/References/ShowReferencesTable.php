<?php

namespace App\Http\Livewire\References;

use App\Models\Reference;
use Livewire\Component;

class ShowReferencesTable extends Component
{
    public $ref = "";
    public $idProduct = "";


    public function render()
    {
        if ($this->idProduct == "") {
            $references = Reference::where('product_id', $this->idProduct)
                ->paginate(10);
        } else if ($this->ref == "") {
            $references = Reference::where('product_id', $this->idProduct)
                ->paginate(10);
        } else {
            $references = Reference::where('product_id', $this->idProduct)
                ->where('num_ref', $this->ref)
                ->orWhere('name_ref', 'like', '%' . $this->ref . '%')
                ->paginate(10);
        }
        return view('livewire.references.show-references-table', compact('references'));
    }
}
