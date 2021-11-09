<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Title extends Component
{


    public $title1;

    public function mount($title)
    {
        $this->title1 = $title;
    }

    public function render()
    {
        return view('livewire.title');
    }
}
