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
        if (request()->is('/')) {
            $this->lifestyles = ModelsLifestyle::take(2)->get();
        } else {
            $this->lifestyles = ModelsLifestyle::with('media')->get();
        }
    }

    public function render()
    {
        return view('livewire.lifestyle');
    }
}
