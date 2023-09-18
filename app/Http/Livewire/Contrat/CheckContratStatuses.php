<?php

namespace App\Http\Livewire\Contrat;

use App\Models\Contrat;
use Livewire\Component;

class CheckContratStatuses extends Component
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
        $this->contrat = Contrat::find($this->contrat->id);
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
