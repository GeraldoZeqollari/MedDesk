<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Button03 extends Component
{

    public $button;
    public function mount($button_title)
    {
        $this->button = $button_title;
    }
    public function render()
    {
        return view('livewire.button03');
    }
}
