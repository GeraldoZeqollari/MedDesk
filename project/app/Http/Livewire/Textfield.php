<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Textfield extends Component
{

    public $type;
    public $name;

    public function mount($type, $name)
    {
        $this->type = $type;
        $this->name = $name;
    }
    public function render()
    {
        return view('livewire.textfield');
    }
}
