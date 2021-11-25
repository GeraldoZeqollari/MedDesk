<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Carbon\CarbonPeriod;

class Button03 extends Component
{

    public $date_time;
    public $button_value;
    public $button_id;
    public $disabled;


    public function mount($date_time, $button_value, $button_id, $disabled)
    {

        $this->date_time = $date_time;
        $this->button_value = $button_value;
        $this->button_id = $button_id;
        $this->disabled = $disabled;
    }



    public function render()
    {
        return view('livewire.button03');
    }
}
