<?php

namespace App\Http\Livewire;

use App\Models\Permissions;
use Livewire\Component;

class CreatePermission extends Component
{
    public $open=false;
    public $name,$description;
    public function render()
    {
        return view('livewire.create-permission');
    }
    public function save(){
        Permissions::create([
            'name'=>$this->name,
            'description'=>$this->description
        ]);
        $this->reset(['open','name','description']);
        $this->emit('render');
    }
}
