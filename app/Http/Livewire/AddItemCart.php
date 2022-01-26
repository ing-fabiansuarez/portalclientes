<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Observation;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddItemCart extends Component
{
    public $open = false;
    public $reference;

    public $inputHorma, $inputSize, $inputObs, $inputQuantity = 1;

    protected $rules = [];

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
        $val_horma = $this->inputHorma;
        $val_obser = $this->inputObs;
        //aqui se van a agregar todas las reglas para los productos que tenemos y lo deje agregar en la lista de productos
        switch ($this->reference->product->id) {
            case 1:
                $this->rules = [
                    'inputHorma' => 'required|exists:horma,id',
                    'inputSize' => 'required|exists:sizes,id',
                    'inputObs' => 'exists:observation,id',
                    'inputQuantity' => 'required|integer',
                ];
                break;
            default:
                $val_horma = null;
                $val_obser = null;
                $this->rules = [
                    'inputSize' => 'required|exists:sizes,id',
                    'inputQuantity' => 'required|integer',
                ];
                break;
                break;
        }

        $this->validate();
        Cart::create([
            'reference_id' => $this->reference->id,
            'size_id' => $this->inputSize,
            'horma_id' => $val_horma,
            'observation_id' => $val_obser,
            'quantity_cart' =>  $this->inputQuantity,
            'user_id' => Auth::user()->id,
            'sold_out_cart' => false,
        ]);
        $this->reset('open', 'inputHorma', 'inputSize', 'inputObs', 'inputQuantity');
        $this->emit('render');
        $this->emit('alert', 'Se agrego a la lista de pedido');
    }
}
