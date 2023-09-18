<?php

namespace App\Http\Livewire\Contrat;

use App\Models\Contrat;
use Livewire\Component;
use App\Events\ClientSigner;

class ChangeContratStatus extends Component
{
    public $clicked = 0;
    public $contrat;

    public function mount($contrat){
        $this->contrat = $contrat;
    }

    public function render()
    {
        return view('livewire.contrat.change-contrat-status');
    }

    public function signer(){
        // dD('done');
        $this->clicked += 1;
        if($this->clicked == 3){
            // Change Contrat Status
            $this->contrat->status = "Validé call";
            $this->contrat->save();
            ClientSigner::dispatch($this->contrat);
        }
    }
}
