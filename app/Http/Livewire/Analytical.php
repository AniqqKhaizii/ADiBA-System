<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Analytical extends Component
{
    public function render()
    {
        return view('livewire.analytical')
        ->layout('layouts.base');
    }
}
