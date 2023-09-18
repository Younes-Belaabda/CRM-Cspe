<?php

namespace App\Http\Livewire\Inputs;

use Livewire\Component;

class Select extends Component
{
    public $title;
    public $items;

    public function render()
    {   
        return view('livewire.inputs.select');
    }
}
