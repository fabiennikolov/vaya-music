<?php

namespace App\Livewire;

use App\Models\Music as ModelsMusic;
use Livewire\Component;

class Music extends Component
{

    public $musics;

    public function mount()
    {
        $this->musics = ModelsMusic::all();
    }
    public function render()
    {
        return view('livewire.music');
    }
}
