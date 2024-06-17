<?php

namespace App\Livewire;

use Livewire\Component;

class Navigation extends Component
{
    public $navLinks = [
        'home' => 'Начало',
    ];

    public $activitiesLinks = [
        // 'tours' => ['name' => "Турове", 'image' => '/images/surron new/IMG_0929.JPG'],
        // 'water-sports' => 'Водни Спортове',
        // 'horseback-riding' => 'Конна Езда',
        // 'archeries' => ['name' => "Стрелба", 'image' => '/images/archeries-section.jpeg'],
        // 'teambuilding' => 'Тиймбилдинг'
    ];

    public $showMenu = false;

    public function toggleMenu()
    {
        $this->showMenu = !$this->showMenu;
    }

    public function render()
    {
        return view('livewire.navigation');
    }
}
