<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Button02 extends Component
{

    public $tampone_type;
    public $tampone_price;

    public function mount($tampone_type, $tampone_price)
    {
        $this->tampone_type = $tampone_type;
        $this->tampone_price = $tampone_price;
    }


    public function render()
    {
        return view('livewire.button02');
    }
}
