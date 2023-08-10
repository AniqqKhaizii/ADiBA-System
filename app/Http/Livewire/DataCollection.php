<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DataCollection extends Component
{
    public function render()
    {
        return view('livewire.data-collection')
        ->layout('layouts.base');
    }
}
