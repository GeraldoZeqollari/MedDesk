<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Button02 extends Component
{
   
    public $paragraph;
    public $price1;

    public function mount($title, $price)
    {
        $this->paragraph = $title;
        $this->price1 = $price;
    }


    public function render()
    {
        return view('livewire.button02');
    }
}
