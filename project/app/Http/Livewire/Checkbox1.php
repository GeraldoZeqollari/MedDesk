<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Checkbox1 extends Component
{

    public $checkbox_text1;

    public function mount($check1)
    {
        $this->checkbox_text1 = $check1;
    }
    public function render()
    {
        return view('livewire.checkbox1');
    }
}
