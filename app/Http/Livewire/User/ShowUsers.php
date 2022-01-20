<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ShowUsers extends Component
{
    /*listeners: oyente utilizado para renderizar el componente desde otro componente */
    protected $listeners = ['render' => 'render'];
    /*Inner Join de la tabla users y roles para listar los usuarios y su rol */
    public function render()
    {
        $users = DB::table('users')
            ->join('roles', 'users.rol_id', '=', 'roles.id')
            ->select('users.*', 'roles.id as idroles', 'roles.name as rol')
            ->get();
        return view('livewire.user.show-users', compact('users'));
    }
}
