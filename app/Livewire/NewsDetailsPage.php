<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class NewsDetailsPage extends Component
{

    public News $news;
    public $averageTime;

    public function calculateAverageTime()
    {
        $characterCount = strlen(strip_tags($this->news->content));

        $averageReadingSpeed = 1300;

        $this->averageTime = ceil($characterCount / $averageReadingSpeed);
    }

    public function mount(News $news)
    {
        $this->news = $news;
        $this->calculateAverageTime();
    }
    public function render()
    {
        return view('livewire.news-details-page');
    }
}
