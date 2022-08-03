<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Subcategory;
use Livewire\Component;

class Selector extends Component
{
    public $category, $subcategory;
    public $categories = [], $subcategories = [];

    public function mount()
    {
        $this->categories = Category::all();
        $this->subcategories = collect(); 
    }

    public function updatedCategory($valor)
    {
        $this->subcategories = Subcategory::where('category_id', $valor)->get();

        $this->subcategory = $this->subcategories->first()->id ?? null;

    }

    public function render()
    {
        return view('livewire.selector');
    }
}
