<?php

namespace App\Http\Livewire\Inputs;

use Livewire\Component;

class Iban extends Component
{
    public $title;
    public function render()
    {
        return view('livewire.inputs.iban');
    }
}
