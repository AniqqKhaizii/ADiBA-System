<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GraphSelection extends Component
{
    public function render()
    {
        $data = session('data', []);
        $columns = session('columns', []);

         // Extract the column names from the first row
        $columnNames = array_shift($data);

        // Combine column names with data rows
        $formattedData = [];
        foreach ($data as $row) {
            $formattedData[] = array_combine($columnNames, $row);
        }


        // Filter the columns that have string values
        $stringColumns = array_filter($columns, function ($column) use ($formattedData) {
            foreach ($formattedData as $row) {
                if (is_string($row[$column])) {
                    return true;
                }
            }
            return false;
        });

        return view('livewire.graph-selection', ['data' => $data, 'columns' => $stringColumns])
            ->layout('layouts.base');
    }
}
