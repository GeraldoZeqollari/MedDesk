<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RoundButton extends Component
{

    public $button;
    public function mount($button_round)
    {
        $this->button = $button_round;
    }
    public function render()
    {
        return view('livewire.round-button');
    }
}
