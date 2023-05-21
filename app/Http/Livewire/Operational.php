<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Operational extends Component
{
    public function render()
    {
        return view('livewire.operational')
        ->layout('layouts.base');
    }
}
