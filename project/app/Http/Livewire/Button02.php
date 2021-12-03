<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Button02 extends Component
{

    public $tampone_type;
    public $tampone_price;
    public $div_id;
    public $change;
    public $select_id;


    public function mount($tampone_type, $tampone_price, $div_id, $change, $select_id)
    {
        $this->tampone_type = $tampone_type;
        $this->tampone_price = $tampone_price;
        $this->div_id = $div_id;
        $this->change = $change;
        $this->select_id = $select_id;
    }


    public function render()
    {
        return view('livewire.button02');
    }
}
