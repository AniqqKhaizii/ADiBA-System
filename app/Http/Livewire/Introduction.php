<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Introduction extends Component
{
    public function render()
    {
        return view('livewire.introduction')
        ->layout('layouts.base');
    }
}
