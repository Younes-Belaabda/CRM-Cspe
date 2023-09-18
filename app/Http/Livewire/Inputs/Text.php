<?php

namespace App\Http\Livewire\Inputs;

use Livewire\Component;

class Text extends Component
{
    public $title;

    public function render()
    {
        return view('livewire.inputs.text');
    }
}
