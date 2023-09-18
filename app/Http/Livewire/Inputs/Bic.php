<?php

namespace App\Http\Livewire\Inputs;

use Livewire\Component;

class Bic extends Component
{
    public $title;
    public function render()
    {
        return view('livewire.inputs.bic');
    }
}
