<?php

namespace App\Http\Livewire;

use App\Models\Permissions;
use Livewire\Component;

class EditPermissionsUser extends Component
{
    public $open = false;
    public function render()
    {
        $permissions = Permissions::all();
        return view('livewire.edit-permissions-user', compact('permissions'));
    }
}
