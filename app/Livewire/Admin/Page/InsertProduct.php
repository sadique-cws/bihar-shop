<?php

namespace App\Livewire\Admin\Page;

use App\Models\Category;
use Livewire\Component;

class InsertProduct extends Component
{
    public function render()
    {
        return view('livewire.admin.page.insert-product', ['categories' => Category::all()]);
    }
}
