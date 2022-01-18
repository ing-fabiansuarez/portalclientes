<?php

namespace App\Http\Livewire;

use App\Models\Permissions;
use Livewire\Component;

class ShowPermissions extends Component
{
    protected $listeners=['render'=>'render','delete'];
    public function render()
    {
        $permissions=Permissions::all();
        return view('livewire.show-permissions', compact('permissions'));
    }
    public function delete(Permissions $id){
        $id->delete();
    }
}
