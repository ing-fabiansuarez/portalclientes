<?php

namespace App\Http\Livewire;

use App\Models\Permissions;
use Livewire\Component;

class EditPermissions extends Component
{
    public $perm;
    public $open = false;
    protected $rules = [
        'perm.name' => 'required',
        'perm.description' => 'required'
    ];

    public function mount(Permissions $permission)
    {
        $this->perm = $permission;
    }

    public function render()
    {
        return view('livewire.edit-permission');
    }

    /**Funcion save: Valida y guarda el permiso actualizado y renderiza la vista
     */
    public function save()
    {
        $this->validate();
        $this->perm->save();
        $this->reset(['open']);
        $this->emitTo('show-permissions', 'render');
    }
}

