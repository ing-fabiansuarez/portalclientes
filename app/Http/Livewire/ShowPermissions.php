<?php

namespace App\Http\Livewire;

use App\Models\Permissions;
use Livewire\Component;

class ShowPermissions extends Component
{
    protected $listeners=['render'=>'render','delete'];

    /*Funcion render: Envia la informacion de todos los permisos existentes*/
    public function render()
    {
        $permissions = Permissions::all();
        return view('livewire.show-permissions', compact('permissions'));
    }
    /**Elimina el permiso seleccionado: El llamado se realiza mediante ajax */
    public function delete(Permissions $id)
    {
        $id->delete();
    }
}
