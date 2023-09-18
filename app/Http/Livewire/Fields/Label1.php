<?php

namespace App\Http\Livewire\Fields;

use Livewire\Component;

class Label1 extends Component
{
    public $title;
    public $for;
    public $is_required = false;

    public function render()
    {
        return view('livewire.fields.label1');
    }
}
