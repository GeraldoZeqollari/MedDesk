<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RoundButton extends Component
{

    public $button_text;


    public function mount($button_text)
    {
        $this->button_text = $button_text;
    }

    public function render()
    {
        return view('livewire.round-button');
    }
}
