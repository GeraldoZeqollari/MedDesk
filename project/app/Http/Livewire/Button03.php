<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Button03 extends Component
{

    public $date_time;
    public $button_id;

    public function mount($date_time, $button_id)
    {
        $this->date_time = $date_time;
        $this->button_id = $button_id;
    }
    public function render()
    {
        return view('livewire.button03');
    }
}
