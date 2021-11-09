<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PagamentoText extends Component
{


    public $type;
    public $label;
    public $text;


    public function mount($label, $type, $text)
    {
        $this->label = $label;
        $this->type = $type;
        $this->type = $text;
    }

    public function render()
    {
        return view('livewire.pagamento-text');
    }
}
