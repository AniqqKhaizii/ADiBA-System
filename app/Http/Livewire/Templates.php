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
        return $this->templates;
        }
    }

    public function render()
    {
        return view('livewire.templates')
        ->layout('layouts.base');
    }
}
