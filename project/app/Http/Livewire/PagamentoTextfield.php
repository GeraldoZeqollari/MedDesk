<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PagamentoTextfield extends Component
{

    public $text;

    public function mount($text)
    {
        $this->text = $text;
    }
    public function render()
    {
        return view('livewire.pagamento-textfield');
    }
}
