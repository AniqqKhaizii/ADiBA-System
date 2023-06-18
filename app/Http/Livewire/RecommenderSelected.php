<?php

namespace App\Http\Livewire;

use App\Models\Metric;
use Illuminate\Http\Request;
use Livewire\Component;

class RecommenderSelected extends Component
{
    public function mount(Request $request)
    {
        $this->metric_id = $request->route('id');
        $this->metrics = Metric::findOrFail($this->metric_id);
    }

    public function render()
    {
        return view('livewire.recommender-selected')
        ->layout('layouts.base');
    }
}
