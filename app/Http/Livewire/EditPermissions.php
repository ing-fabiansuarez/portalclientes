<?php

namespace App\Http\Livewire;

use App\Models\Permissions;
use App\Models\User;
use App\Models\UserPermissions;
use Livewire\Component;

class EditPermissions extends Component
{
    public $user;
    public $open = false;
    public function mount(User $user)
    {
        $this->user = $user;
    }
    //render le asigna los permisos si el usuario no posee ningun permiso, sin embargo estos 
    //estarian inactivos
    public function render()
    {
        $user_permissions = UserPermissions::where('user_id', '=', $this->user->id)->get();
        $permissions = Permissions::all();
        if ($user_permissions->count() == 0) {
            foreach ($permissions as $permission) {
                UserPermissions::create([
                    'user_id' => $this->user->id,
                    'permission_id' => $permission->id,
                    'state' => 0,
                    'by' => $_SESSION['id']
                ]);
            }
            $user_permissions = UserPermissions::where('user_id', '=', $this->user->id)->get();
        }

        $permissions = Permissions::all();
        return view('livewire.edit-permissions', compact('permissions', 'user_permissions'));
    }
}
