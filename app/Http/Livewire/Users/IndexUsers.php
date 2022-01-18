<?php

namespace App\Http\Livewire\Users;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class IndexUsers extends Component
{
    protected $listeners=['render'=>'render'];
    public function render()
    {
        $users = DB::table('users')
            ->join('roles', 'users.rol_id', '=', 'roles.id')
            ->select('users.*', 'roles.id as idroles', 'roles.name as rol')
            ->get();
        return view('livewire.users.index-users', compact('users'));
    }
}
