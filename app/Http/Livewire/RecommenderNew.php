<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RecommenderNew extends Component
{

    public $dashboardType;
    public $industry;
    public $position;
    public $met=[];

    public function submit()
    {
        if ($this->industry == "" || $this->position == "") {
            return ("Please select an answer for each question.");
        } else {
            // logic to determine dashboard type based on $industry and $position
            if ($this->industry == '1' && $this->position == '2') {
            $this->dashboardType = "Operational Dashboard";
            } else if ($this->industry == '1' && $this->position == '1') {
            $this->dashboardType = "Analytical Dashboard";
            } else if ($this->industry == '1' && $this->position == '3') {
            $this->dashboardType = "Strategic Dashboard";
            } else if ($this->industry == '2' && ($this->position == '1' || $this->position == 2)) {
            $this->dashboardType = "Strategic Dashboard";
            } else if ($this->industry == '1' && $this->position == '3') {
            $this->dashboardType = "Strategic Dashboard";
            } else if ($this->industry == '2' && $this->position == '3') {
            $this->dashboardType = "Analytical Dashboard";
        }
        return $this->dashboardType;
        
        }
    }

    public function render()
    {
        return view('livewire.recommender-new')
        ->layout('layouts.base');
    }
}
