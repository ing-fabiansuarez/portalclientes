<?php

namespace App\Http\Livewire\Administration;

use App\Models\Product;
use App\Models\Reference;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class ShowReferences extends Component
{
    public $id_product = 1;
    public $search = '';
    public $sort = 'num_ref';
    public $direction = 'desc';
    protected $listeners = ['render' => 'render'];
    public function render()
    {
        $products = Product::all();
        $references = DB::table('references')
            ->join('products', 'references.product_id', '=', 'products.id')
            ->where('product_id', '=', $this->id_product)
            ->where('num_ref', 'like', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)
            ->select('references.*', 'products.id as id_product', 'products.name_product as name_product')
            ->get();
        return view('livewire.administration.show-references', compact('products', 'references'));
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
