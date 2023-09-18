<?php

namespace App\Http\Livewire\Inputs;

use Livewire\Component;

class Phone extends Component
{
    public $title;
    
    public function render()
    {
        return view('livewire.inputs.phone');
    }
}
