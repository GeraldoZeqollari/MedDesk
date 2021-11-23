<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Squarebutton extends Component
{

    public $button_text;
    public $icon;
    public $value;
    public function mount($button_text, $icon, $value)
    {
        $this->button_text = $button_text;
        $this->icon = $icon;
        $this->value = $value;
    }
    public function render()
    {
        return view('livewire.squarebutton');
    }
}
