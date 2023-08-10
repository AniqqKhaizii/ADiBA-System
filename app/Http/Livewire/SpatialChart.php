<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SpatialChart extends Component
{
    public function render()
    {
        $data = session('data', []);
        $columns = session('columns', []);
        $columnNames = $data[0];
        $dataset = [];

        // Find the indexes of latitude and longitude columns
        $latitudeIndex = array_search('latitude', $columnNames);
        $longitudeIndex = array_search('longitude', $columnNames);

        // Extract latitude and longitude values from the data
        foreach ($data as $rowIndex => $row) {
            if ($rowIndex === 0) {
                // Skip the header row
                continue;
            }

            $latitude = $row[$latitudeIndex];
            $longitude = $row[$longitudeIndex];

            $dataset[] = [
                'latitude' => $latitude,
                'longitude' => $longitude,
            ];
        }

        // Pass $dataset to the 'spatial' view or store it in the session for further use
        // For example, you can pass it to the view as follows:
        return view('livewire.spatial-chart', ['dataset' => $dataset])
        ->layout('layouts.base');
    }
}
