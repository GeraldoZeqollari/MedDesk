<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Checkbox extends Component
{

    public $checkbox_text;
    public $checkbox_name;

    public function mount($checkbox_text, $checkbox_name)
    {
        $this->checkbox_text = $checkbox_text;
        $this->checkbox_name = $checkbox_name;
    }


    public function render()
    {
        return view('livewire.checkbox');
    }
}
