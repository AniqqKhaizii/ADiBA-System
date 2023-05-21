<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Recommender extends Component
{
    public $industry = '';
    public $position = '';
    public $dashboardType;

    public function submit()
    {
        if ($this->industry == "" || $this->position == "") {
            return ("Please select an answer for each question.");
        } else {
            // logic to determine dashboard type based on $industry and $position
            if ($this->industry == "healthcare" && $this->position == "manager") {
            $this->dashboardType = "Operational Dashboard";
            } else if ($this->industry == "healthcare" && $this->position == "analyst") {
            $this->dashboardType = "Analytical Dashboard";
            } else if ($this->industry == "healthcare" && $this->position == "executive") {
            $this->dashboardType = "Strategic Dashboard";
            } else if ($this->industry == "finance" && ($this->position == "analyst" || $this->position == "manager")) {
            $this->dashboardType = "Strategic Dashboard";
            } else if ($this->industry == "retail" && ($this->position == "analyst" || $this->position == "manager")) {
            $this->dashboardType = "Analytical Dashboard";
            } else if ($this->industry == "technology" && ($this->position == "analyst" || $this->position == "manager")) {
            $this->dashboardType = "Analytical Dashboard";
            } else if ($this->industry == "healthcare" && $this->position == "executive") {
            $this->dashboardType = "Strategic Dashboard";
            } else if ($this->industry == "finance" && $this->position == "executive") {
            $this->dashboardType = "Analytical Dashboard";
            } else if ($this->industry == "retail" && $this->position == "executive") {
            $this->dashboardType = "Operational Dashboard";
            } else if ($this->industry == "technology" && $this->position == "executive") {
            $this->dashboardType = "Operational Dashboard";
            }
        }
        return $this->dashboardType;
        
    }

    public function render()
    {
        
        return view('livewire.recommender')
        ->layout('layouts.base');
    }
}

