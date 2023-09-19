<?php

namespace App\Http\Livewire\Contrat;

use Livewire\Component;
use App\Events\ClientSignerCspePlus;
use App\Models\ContratPlus as Contrat;

class ChangeContratStatusPlus extends Component
{
    public $contrat;
    public $status;
    public $is_email_opened = false;
    public $clicked = 0;
    public $text_button = "Cliquer 3 fois pour signer";

    protected $listeners = ['postAdded' , 'emailOpened'];


    public function mount($contrat){
        $this->contrat = $contrat;
        $this->status  = $contrat->status;
        $this->is_email_opened = $this->contrat->is_mail_opened;
    }

    public function booted(){
        $this->contrat = Contrat::find($this->contrat->id);
    }

    public function render()
    {
        return view('livewire.contrat.change-contrat-status');
    }

    public function postAdded(){
        $this->status = $this->contrat->status;
    }

    public function emailOpened(){
        $this->is_email_opened = $this->contrat->is_mail_opened;
    }

    public function signer(){
        $this->clicked += 1;
        if($this->clicked == 1) {
            $this->text_button = "Cliquer 1";
        }
        if($this->clicked == 2) {
            $this->text_button = "Cliquer 2";
        }
        if($this->clicked == 3){
            // Change Contrat Status
            $this->contrat->status = "Validé call";
            $this->contrat->save();
            ClientSignerCspePlus::dispatch($this->contrat);
        }
    }
}
