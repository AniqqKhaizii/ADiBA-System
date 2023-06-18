<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RecommenderExample extends Component
{
    public function render()
    {
        return view('livewire.recommender-example')
        ->layout('layouts.base');
    }
}
