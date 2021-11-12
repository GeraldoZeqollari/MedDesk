<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PagamentoMethod extends Component
{
    public $pagamento_method;
    public $name;


    public function mount($pagamento_method,$name){
        
        $this->pagamento_method=$pagamento_method;
        $this->name=$name;
    }

    public function render()
    {
        return view('livewire.pagamento-method');
    }
}
