<?php

namespace App\Livewire;

use App\Models\Lifestyle as ModelsLifestyle;
use Livewire\Component;

class Lifestyle extends Component
{
    public $lifestyles;
    public $images;

    public function mount()
    {
        $this->lifestyles = ModelsLifestyle::all(); // First fetch all lifestyles

        if ($this->lifestyles->isNotEmpty()) {
            $this->images = $this->lifestyles->first()->getMedia('lifestyle'); // Get media for the first lifestyle
        }
    }

    public function render()
    {
        return view('livewire.lifestyle');
    }
}
