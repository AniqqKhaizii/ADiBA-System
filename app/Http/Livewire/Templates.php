<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Templates extends Component
{
    public $industry = ' ';
    public $dashboardType =' ';
    public $templates;
    
    public function submit()
    {
        if ($this->industry == "" || $this->dashboardType == "") {
            return ("Please select an answer for each question.");
        } else {
            
            if ($this->industry == "finance" && $this->dashboardType == "operational") {
                $this->templates = "financeOperational";
            }
            elseif ($this->industry == "finance" && $this->dashboardType == "analytical") {
                $this->templates = "financeAnalytical";
            }
            elseif ($this->industry == "finance" && $this->dashboardType == "strategic") {
                $this->templates = "financeStrategic";
            }
            elseif ($this->industry == "healthcare" && $this->dashboardType == "operational") {
                $this->templates = "healthcareOperational";
            }
            elseif ($this->industry == "healthcare" && $this->dashboardType == "analytical") {
                $this->templates = "healthcareAnalytical";
            }
            elseif ($this->industry == "healthcare" && $this->dashboardType == "strategic") {
                $this->templates = "healthcareStrategic";
            }
        }
        return $this->templates;
    }

    public function render()
    {
        return view('livewire.templates')
        ->layout('layouts.base');
    }
}
