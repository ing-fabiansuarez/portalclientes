<?php

namespace App\Http\Livewire\Users;

use App\Models\Permissions;
use App\Models\Phones;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;

class EditUser extends Component
{
    public $open = false; 
    
    public function mount($user_id)
    {
        $this->user_id = $user_id;
    }
    public function render()
    {
        $permissions = Permissions::all();
        $user = User::find($this->user_id);
        $phones = Phones::NumberPhones($this->user_id);
        return view('livewire.users.edit-user', compact('user', 'permissions', 'phones'));
    }
}
