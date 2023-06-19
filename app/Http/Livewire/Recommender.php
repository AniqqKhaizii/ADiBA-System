<?php

namespace App\Http\Livewire;

use App\Models\Industry;
use App\Models\Metric;
use App\Models\Position;
use Illuminate\Http\Request;
use Livewire\Component;

class Recommender extends Component
{
    public $dashboardType;
    public $inds;
    public $pos;
    public $met=[];


    public function submit()
    {
        if ($this->inds == "" || $this->pos == "") {
            return ("Please select an answer for each question.");
        } else {
            // logic to determine dashboard type based on $industry and $position
            if ($this->inds == '1' && $this->pos == '2') {
            $this->dashboardType = "Operational Dashboard";
            } else if ($this->inds == '1' && $this->pos == '1') {
            $this->dashboardType = "Analytical Dashboard";
            } else if ($this->inds == '1' && $this->pos == '3') {
            $this->dashboardType = "Strategic Dashboard";
            } else if ($this->inds == '2' && ($this->pos == '1' || $this->pos == 2)) {
            $this->dashboardType = "Strategic Dashboard";
            } else if ($this->inds == '1' && $this->pos == '3') {
            $this->dashboardType = "Strategic Dashboard";
            } else if ($this->inds == '2' && $this->pos == '3') {
            $this->dashboardType = "Analytical Dashboard";
        }
        return $this->dashboardType;
        
        }
    }

    public function select(Request $request)
    {
        //$this->id = $request->input('id');
        //$this->metrics = Metric::where('id', $this->met);
        //dd($this->metrics);
        $str = implode(" ", $this->met);
        array($str);
        dd($str);
        return redirect()->route('selected', array($str));
    }

    public function render()
    {
        $industry = Industry::all();
        $position = Position::all();
        $metric = Metric::all();

        return view('livewire.recommender', compact('industry','position','metric'))
        ->layout('layouts.base');
    }
}

