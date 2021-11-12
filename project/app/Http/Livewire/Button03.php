<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Button03 extends Component
{

    public $button;
    public $button_id;
    public function mount($button_title, $button_id)
    {
        $this->button = $button_title;
        $this->button_id = $button_id;
    }
    public function render()
    {
        return view('livewire.button03');
    }
}
