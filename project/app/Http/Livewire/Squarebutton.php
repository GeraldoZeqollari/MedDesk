<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Squarebutton extends Component
{

    public $button_text;
    public $icon;

    public function mount($button_text, $icon)
    {
        $this->button_text = $button_text;
        $this->icon = $icon;
    }
    public function render()
    {
        return view('livewire.squarebutton');
    }
}
