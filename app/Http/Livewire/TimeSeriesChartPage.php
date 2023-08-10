<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;

use App\Charts\TimeSeriesChart;

class TimeSeriesChartPage extends Component
{
    public function mount()
    {
        $this->selectedData = session('selectedData', []);
    }

    public function render()
    {
        // Retrieve the selected data from the session
   // Retrieve the selected data from the session
   $selectedData = session('selectedData', []);

   $labels = array_keys($selectedData[0]);
   $dateColumn = 'Date'; // Replace 'Date' with the actual column name for dates
   

   // Prepare data for the chart series
   $chartSeries = [];
   foreach ($selectedData as $row) {
       $seriesData = [];
       $dateValue = null;

       foreach ($row as $column => $value) {
           if ($column === $dateColumn) {
               $dateValue = $value;
           } else {
               $seriesData[] = $value;
           }
       }
       if ($dateValue !== null) {
           $chartSeries[] = [
               'name' => $row[$dateColumn],
               'data' => $row[$labels[0]],
           ];
       }
   }
   $Date = [];
   foreach ($chartSeries as $item) {
    $Date[] = $item['name'];
   }

    $groupedData = [];

    foreach ($chartSeries as $item) {
        $name = $item['name'];
        $dataValue = $item['data'];
        

        // Check if the data value is numeric before adding it to the sum
        if (is_numeric($dataValue)) {
            if (!isset($groupedData[$name])) {
                $groupedData[$name] = [
                    'name' => $name,
                    'data' => 0,
                ];
            }

            $groupedData[$name]['data'] += $dataValue;
        }
    }

   $result = array_values($groupedData);

   $chart1 = new TimeSeriesChart;
   $chart1->labels(array_column($groupedData, 'name'));
   $chart1->dataset('Time Series Data', 'bar', array_column($groupedData, 'data'))
       ->options([
           'borderColor' => '#3366cc',
           'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
           'datalabels' => [
               'backgroundColor' => 'rgba(0, 0, 0, 0.7)',
               'borderRadius' => 4,
               'color' => 'white',
               'font' => [
                   'size' => 10,
               ],
           ],
       ]);

       
    $chart2 = new TimeSeriesChart;
    $chart2->labels(array_column($groupedData, 'name'));
    $chart2->dataset('Time Series Data', 'line', array_column($groupedData, 'data'))
       ->options([
           'borderColor' => '#3366cc',
           'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
           'datalabels' => [
               'backgroundColor' => 'rgba(0, 0, 0, 0.7)',
               'borderRadius' => 4,
               'color' => 'white',
               'font' => [
                   'size' => 10,
               ],
           ],
       ]);


        return view('livewire.time-series-chart-page')
        ->with([
            'chart1' => $chart1,
            'chart2' => $chart2
        ])
        ->layout('layouts.base');
    }
}
