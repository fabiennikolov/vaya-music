<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class Events extends Component
{
    public $events;

    public function mount()
    {
        if (request()->is('/')) {
            $this->events = Event::take(2)->get();
        } else {
            $this->events = Event::with('media')->get();
        }
    }

    public function render()
    {
        return view('livewire.events', ['events' => $this->events]);
    }
}
