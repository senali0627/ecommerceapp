<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Title;


#[Title("Home Page - Click Gift Shop")]

class HomePage extends Component
{
    public function render()
    {
        
        $categories = Category::where('is_active', 1)->get();

        return view('livewire.home-page', [
            'categories' => $categories,
        ]);
    }
}
