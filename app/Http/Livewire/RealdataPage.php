<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RealdataPage extends Component
{
    public $dashboardType;
    public $target;

    public function submit1()
    {
        if ($this->target == "") {
            return ("Please select an answer for each question.");
        } else {
            // logic to determine dashboard type based on $target and $position
            if ($this->target == 'operational') {
            $this->dashboardType = "Operational Dashboard";
            } else if ($this->target == 'analytical') {
            $this->dashboardType = "Analytical Dashboard";
            } else if ($this->target == 'strategical') {
            $this->dashboardType = "Strategic Dashboard";
            }
        }

        return $this->dashboardType;
        
        
    }

    public function render()
    {
        return view('livewire.realdata-page')
        ->layout('layouts.base');
    }
}
