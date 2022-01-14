<?php

namespace App\Http\Livewire;

use App\Models\Permissions;
use Livewire\Component;

class EditPermissions extends Component
{
    public $user;
    public $open=false;
    public function mount($user_id)
    {
        $this->user=$user_id;
    }
    //render le as igna los permisos si el usuario no posee ningun permiso, sin embargo estos 
    //estarian inactivos
    public function render()
    {
        /* $userPermissions=DB::table('user_has_permissions')
        ->join('permissions', 'user_has_permissions.permission_id', '=', 'permissions.id')
        ->where('user_has_permissions.user_id','=',$this->user)
        ->get(); */
        $permissions=Permissions::all();
        
        return view('livewire.edit-permissions');
    }
    public function save(){
        
    }
}
