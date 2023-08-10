<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SpatialSelection extends Component
{
    public function render()
    {
        $data = session('data', []);
        $columns = session('columns', []);

        $filteredColumns = array_filter($columns, function ($value) {
            return in_array($value, ['latitude', 'longitude']);
        });

        return view('livewire.spatial-selection', [
            'data' => $data,
            'columns' => $filteredColumns
        ])->layout('layouts.base');
    }
}
