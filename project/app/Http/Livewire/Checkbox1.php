<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Checkbox1 extends Component
{

    public $checkbox_text1;
    public $name;

    public function mount($check1,$name)
    {
        $this->checkbox_text1 = $check1;
        $this->name=$name;
    }
    public function render()
    {
        return view('livewire.checkbox1');
    }
}
