<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class StorePage extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::with('media')->get();
    }

    public function render()
    {
        return view('livewire.store-page');
    }
}
