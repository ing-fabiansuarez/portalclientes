<?php

namespace App\Http\Livewire\Permissions;

use App\Models\Permissions;
use App\Models\Phones;
use Livewire\Component;

class UserPermission extends Component
{
    // open: Activa o desactiva el modal
    public $open = false;
    public function mount($user_id)
    {
        $this->user = $user_id;
    }
    /*Funcion render: Envia la informacion de todos los permisos existentes, ademas de el Id del usuario a editarle los 
    permisos*/
    public function render()
    {
        $permissions = Permissions::all();
        $user = $this->user;
        return view('livewire.permissions.user-permission', compact('user', 'permissions'));
    }
}
