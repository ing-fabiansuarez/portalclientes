<?php

namespace App\Http\Livewire\Orders;

use App\Models\City;
use App\Models\Department;
use App\Models\Transporter;
use Livewire\Component;

class FormShippingInformation extends Component
{
    public $department;
    public $cities;
    public $flete = 16000;

    public function render()
    {
        $this->loadcities();
        return view('livewire.orders.form-shipping-information', [
            'departments' => Department::All(),
            'transporters' => Transporter::where('active', true)->get()
        ]);
    }

    public function loadcities()
    {
        $this->cities = City::where('departament_id', $this->department)->get();
    }
}
