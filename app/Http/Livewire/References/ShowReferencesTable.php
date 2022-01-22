<?php

namespace App\Http\Livewire\References;

use App\Models\Reference;
use Livewire\Component;

class ShowReferencesTable extends Component
{
    public function render()
    {
        $references = Reference::where('active_ref', true)->paginate(10);        
        return view('livewire.references.show-references-table', compact('references'));
    }
}
