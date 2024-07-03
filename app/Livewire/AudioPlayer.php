<?php

namespace App\Livewire;

use Livewire\Component;

class AudioPlayer extends Component
{
    public $audioSrc = '/audio/VALENTINNA - НИЧИЯ ЛЮБОВ [OFFICIA 4K VIDEO] 2021.mp3';
    public $title = 'VALENTINNA - НИЧИЯ ЛЮБОВ [OFFICIA 4K VIDEO]';

    public function render()
    {
        return view('livewire.audio-player');
    }
}
