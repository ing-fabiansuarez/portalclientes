<?php

namespace App\Http\Livewire;

use App\Models\UserPermissions;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class ToggleButton extends Component
{
    public UserPermissions $model;
    public string $field;
    public bool $hasStock;

    public function mount()
    {
        $this->hasStock = (bool) $this->model->getAttribute($this->field);
    }
    public function render()
    {
        return view('livewire.toggle-button');
    }
    public function updating($field, $value)
    {
        $this->model->setAttribute($this->field, $value)->save();
    }
}
