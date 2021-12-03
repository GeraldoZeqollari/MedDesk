<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RoundButton extends Component
{

    public $button_text;
    public $button_id;

    public function mount($button_text, $button_id)
    {
        $this->button_text = $button_text;
        $this->button_id = $button_id;
    }

    public function render()
    {
        return view('livewire.round-button');
    }
}
