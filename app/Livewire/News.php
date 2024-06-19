<?php

namespace App\Livewire;

use App\Models\News as ModelsNews;
use Livewire\Component;

class News extends Component
{
    public $newss;
    public $images = [];
    public function mount()
    {
        $this->newss = ModelsNews::with('media')->get();

        $this->newss = $this->newss->map(function ($newss) {
            $newss->images = $newss->getMedia('news');
            return $newss;
        });
    }
    public function render()
    {
        return view('livewire.news');
    }
}
