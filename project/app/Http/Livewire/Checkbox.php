<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Checkbox extends Component
{

    public $checkbox_text;


    public function mount($check)
    {
        $this->checkbox_text = $check;
    }


    public function render()
    {
        return view('livewire.checkbox');
    }
}
