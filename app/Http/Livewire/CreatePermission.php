<?php

namespace App\Http\Livewire;

use App\Models\Permissions;
use Livewire\Component;

class CreatePermission extends Component
{
    public $open = false;
    public $name, $description;
    protected $rules=[
        'name'=>'required|max:50',
        'description'=>'required'
    ];
    public function render()
    {
        return view('livewire.create-permission');
    }
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
    public function save()
    {
        $this->validate();
        Permissions::create([
            'name' => $this->name,
            'description' => $this->description
        ]);
        $this->reset(['open', 'name', 'description']);
        $this->emit('render');
    }
}
