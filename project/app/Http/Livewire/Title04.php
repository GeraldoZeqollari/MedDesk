<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Title04 extends Component
{


    public function mount($textfield, $textfield1, $textfield2, $textfield3, $textfield4, $textfield5, $textfield6, $textfield7, $textfield8, $textfield9, $textfield0)
    {
        $this->text = $textfield;
        $this->text1 = $textfield1;
        $this->text2 = $textfield2;
        $this->text3 = $textfield3;
        $this->text4 = $textfield4;
        $this->text5 = $textfield5;
        $this->text6 = $textfield6;
        $this->text7 = $textfield7;
        $this->text8 = $textfield8;
        $this->text9 = $textfield9;
        $this->text0 = $textfield0;
    }

    public function render()
    {
        return view('livewire.title04');
    }
}
