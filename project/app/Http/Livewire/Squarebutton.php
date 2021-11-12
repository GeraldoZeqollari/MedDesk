<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Squarebutton extends Component
{

    public $name;
    public $icon;

    public function mount($name, $icon)
    {
        $this->name = $name;
        $this->icon = $icon;
    }
    public function render()
    {
        return view('livewire.squarebutton');
    }
}
