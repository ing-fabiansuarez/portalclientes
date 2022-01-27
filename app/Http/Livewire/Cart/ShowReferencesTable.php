<?php

namespace App\Http\Livewire\Cart;

use App\Models\Category;
use App\Models\Reference;
use Livewire\Component;

class ShowReferencesTable extends Component
{
    public $ref = "";
    public $idProduct = "";
    public $category;

    public function mount(Category $category)
    {
        $this->category = $category;
    }

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
        return view('livewire.cart.show-references-table', [
            'references' => $references,
            'category' => $this->category
        ]);
    }
}
