<?php

namespace App\Livewire\Admin\Page;

use App\Models\Category;
use Livewire\Component;

class CallingCategory extends Component
{
    public function render()
    {
        return view('livewire.admin.page.calling-category', ['categories' => Category::all()]);
    }
}
