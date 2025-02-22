<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Roles;

class SelectInputRoles extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $roles = Roles::all();
        return view('components.select-input-roles',compact('roles'));
    }
}
