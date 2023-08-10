<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;

class Graph extends Component
{
    public $selectedData;

    public function mount()
    {
        $this->selectedData = session('selectedData', []);
    }

    public function render()
    {
        $labels = array_keys($this->selectedData[0]);
        $column = implode(', ', array_keys($this->selectedData[0]));
        // Get the counts of "ZON" values
        $ValueCounts = array_count_values(array_column($this->selectedData, $column));

        
        // Create an array for the chart data
        $chartData = [];
        foreach ($ValueCounts as $value => $count) {
            $chartData[] = [
                'Category' => $value,
                'Count' => $count,
            ];
        }
        

        $colors = ['#3366cc', '#dc3912', '#ff9900', '#109618', '#990099', '#0099c6'];

        // Vertical Bar Chart
        $verticalBarChart = LivewireCharts::columnChartModel()
        ->setTitle('Vertical Bar Chart')
        ->setAnimated(true)
        ->setColors($colors)
        ->withDataLabels();

        // Add column data for the counts
        foreach ($chartData as $data) {
            $verticalBarChart->addColumn($data['Category'], $data['Count'], '#f6ad55');
        }

        // Vertical Bar Chart
        $horizontalBarChart = LivewireCharts::columnChartModel()
        ->setTitle('Horizontal Bar Chart')
        ->setAnimated(true)
        ->setColors($colors)
        ->withDataLabels()
        ->setHorizontal(true);

        // Add column data for the counts
        foreach ($chartData as $data) {
            $horizontalBarChart->addColumn($data['Category'], $data['Count'], '#f6ad55');
        }

        // Pie Chart
        $pieChart = LivewireCharts::pieChartModel()
        ->setTitle('Pie Chart')
        ->setColors($colors);

        // Add slices to the pie chart
        foreach ($ValueCounts as $value => $count) {
        $pieChart->addSlice($value, $count, '#f6ad55');
        }
    
        return view('livewire.graph')
            ->with([
                'verticalBarChart' => $verticalBarChart,
                'horizontalBarChart' => $horizontalBarChart,
                'pieChart' => $pieChart
            ])
            ->layout('layouts.base');
    }
        
    

}
