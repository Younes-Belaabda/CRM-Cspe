<?php

namespace App\Http\Livewire\Errors;

use Livewire\Component;

class FieldError extends Component
{
    public $message;
    public function render()
    {
        return view('livewire.errors.field-error');
    }
}
