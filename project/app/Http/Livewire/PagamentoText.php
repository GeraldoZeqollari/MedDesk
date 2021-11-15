<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PagamentoText extends Component
{


    public $type;
    public $label;
    public $input_name;


    public function mount($label, $type, $input_name)
    {
        $this->label = $label;
        $this->type = $type;
        $this->input_name = $input_name;
    }

    public function render()
    {
        return view('livewire.pagamento-text');
    }
}
