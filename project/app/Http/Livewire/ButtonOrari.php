<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class ButtonOrari extends Component
{

    public $date_time;
    public $button_value;
    public $button_id;


    public function mount($date_time, $button_value, $button_id)
    {
        $this->date_time = $date_time;
        $this->button_value = $button_value;
        $this->button_id = $button_id;
    }
    public function render()
    {
        return view('livewire.button-orari');
    }
}
