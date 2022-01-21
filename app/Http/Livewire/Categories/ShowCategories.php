<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class ShowCategories extends Component
{
    public function render()
    {
        $categories = Category::all();
            
        return view('livewire.categories.show-categories')->with('categories', $categories);;
    }
}
 