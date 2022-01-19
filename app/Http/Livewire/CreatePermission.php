<?php

namespace App\Http\Livewire;

use App\Models\Permissions;
use Livewire\Component;

class CreatePermission extends Component
{
    public $open = false;
    public $name, $description;
    protected $rules = [
        'name' => 'required|max:50',
        'description' => 'required'
    ];
    public function render()
    {
        return view('livewire.create-permission');
    }
    /*Funcion updated valida el formulario sin actualizar o enviar el modal */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    /**Funcion save: Valida y guarda el permiso creado, posteriormente, resetea las variables open
     * name y descripcion, y renderiza la vista
     */
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
