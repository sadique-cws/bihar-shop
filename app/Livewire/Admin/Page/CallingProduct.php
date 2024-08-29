<?php

namespace App\Livewire\Admin\Page;

use App\Models\Product;
use Livewire\Component;

class CallingProduct extends Component
{
    public function render()
    {
        return view('livewire.admin.page.calling-product',['products' => Product::all()]);
    }
}
