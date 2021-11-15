<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PagamentoTextfield extends Component
{

    public $input_name;

    public function mount($input_name)
    {
        $this->input_name = $input_name;
    }
    public function render()
    {
        return view('livewire.pagamento-textfield');
    }
}
