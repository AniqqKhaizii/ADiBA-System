<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TimeSeriesSelection extends Component
{
    public function render()
    {
        $data = session('data', []);
        $columns = session('columns', []);

        return view('livewire.time-series-selection', ['data' => $data, 'columns' => $columns])
        ->layout('layouts.base');
    }
}
