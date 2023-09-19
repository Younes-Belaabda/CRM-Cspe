<?php

namespace App\Http\Livewire\Contrat;

use App\Models\ContratPlus;
use Livewire\Component;

class CheckContratPlusStatuses extends Component
{
    public $contrat;
    public $status;
    public $is_email_opened = false;

    protected $listeners = ['postAdded' , 'emailOpened'];

    public function mount($contrat){
        $this->contrat = $contrat;
        $this->status  = $contrat->status;
        $this->is_email_opened = $this->contrat->is_mail_opened;
    }

    public function booted(){
        $this->contrat = ContratPlus::find($this->contrat->id);
    }

    public function postAdded(){
        $this->status = $this->contrat->status;
    }

    public function emailOpened(){
        $this->is_email_opened = $this->contrat->is_mail_opened;
    }

    public function render()
    {
        return view('livewire.contrat.check-contrat-statuses');
    }
}
