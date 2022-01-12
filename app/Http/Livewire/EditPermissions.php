<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class EditPermissions extends Component
{
    public $user;
    public $open=false;
    public function mount(User $user)
    {
        $this->user=$user;
    }
    public function render()
    {
        return view('livewire.edit-permissions');
    }
}
