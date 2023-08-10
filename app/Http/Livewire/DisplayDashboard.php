<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DisplayDashboard extends Component
{
    public function render()
    {
        // Retrieve the selected data from the session
        $this->generatedCharts = session('generatedCharts', []);

        return view('livewire.display-dashboard', [
            'generatedCharts' => $this->generatedCharts
            // Pass the generated graphs to the view
        ])->layout('layouts.base');
    }
}
