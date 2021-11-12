<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Checkbox extends Component
{

    public $checkbox_text;
    public $name;

    public function mount($check, $name)
    {
        $this->checkbox_text = $check;
        $this->name = $name;
    }


    public function render()
    {
        return view('livewire.checkbox');
    }
}
