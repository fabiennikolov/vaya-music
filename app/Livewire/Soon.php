<?php

namespace App\Livewire;

use App\Models\Soon as ModelsSoon;
use Livewire\Component;

class Soon extends Component
{
 public $soons;
    public function mount(){
        $this->soons = ModelsSoon::with('media')->get();
    }

    public function render()
    {
        return view('livewire.soon');
    }
}
