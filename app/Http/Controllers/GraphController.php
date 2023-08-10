<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use App\Charts\TimeSeriesChart;

class GraphController extends Controller
{
    public function generateGraph(Request $request)
    {
        $data = session('data', []);
        $columns = session('columns', []);
        $selectedColumns = $request->input('columns', []);
        $columnNames = $data[0];
        $dataset = [];

        for ($i = 1; $i < count($data); $i++) {
            $rowData = $data[$i];
            $row = [];

            for ($j = 0; $j < count($columnNames); $j++) {
                $columnName = $columnNames[$j];
                $row[$columnName] = $rowData[$j];
            }

            $dataset[] = $row;
            
        }

        $selectedData = [];
        foreach ($dataset as $rowIndex => $row) {
            $filteredRow = [];

            foreach ($selectedColumns as $columnName) {
                if (isset($row[$columnName])) {
                    $filteredRow[$columnName] = $row[$columnName];
                }
            }

            $selectedData[] = $filteredRow;
        }
        // Store the selected data in the session
        $request->session()->put('selectedData', $selectedData);

        

        return redirect('categorical-graph');
    }

    public function displayGraph()
    {
        // Retrieve the selected data from the session
        $this->selectedData = session('selectedData', []);

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

        return redirect('graph');
    }

    public function generateTimeSeries(Request $request)
    {
        $data = session('data', []);
        $columns = session('columns', []);
        $selectedColumns = $request->input('columns', []);

        $columnNames = $data[0];
        $dataset = [];

        $dateColumn = null; // Variable to store the date column
        $selectedData = []; // Variable to store the selected data

        for ($i = 1; $i < count($data); $i++) {
            $rowData = $data[$i];
            $row = [];

            for ($j = 0; $j < count($columnNames); $j++) {
                $columnName = $columnNames[$j];
                $row[$columnName] = $rowData[$j];

                // Check if the column has a date datatype
                if (str_contains(strtolower($columnName), 'date') || str_contains(strtolower($columnName), 'tarikh') || str_contains(strtolower($columnName), 'time'))  {
                    $dateColumn = $columnName;
                }
            }

            $dataset[] = $row;
        }

        foreach ($dataset as $rowIndex => $row) {
            $filteredRow = [];

            foreach ($selectedColumns as $columnName) {
                if (isset($row[$columnName])) {
                    $filteredRow[$columnName] = $row[$columnName];
                }
            }

            // Add the date column data to the selected data
            if ($dateColumn !== null && isset($row[$dateColumn])) {
                $filteredRow['Date'] = $row[$dateColumn];
            }

            $selectedData[] = $filteredRow;
        }
        // Store the selected data in the session
        $request->session()->put('selectedData', $selectedData);

        return redirect('timeseries-graph');
    }

    public function displayTimeSeries()
    {
        // Retrieve the selected data from the session
        $selectedData = session('selectedData', []);
        $labels = array_keys($selectedData[0]);
        $dateColumn = "Date"; // Replace 'Date' with the actual column name for dates
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
                    'name' => $dateValue,
                    'data' => $seriesData,
                ];
            }
        }

        $chart = new TimeSeriesChart;
        $chart->labels($labels);
        $chart->dataset('Time Series Data', 'line', $chartSeries)
            ->options([
                'borderColor' => '#3366cc',
                'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                'datalabels' => [
                    'backgroundColor' => 'rgba(0, 0, 0, 0.7)',
                    'borderRadius' => 4,
                    'color' => 'white',
                    'font' => [
                        'size' => 50,
                    ],
                ],
            ]);

        return redirect('timeseries');
    }

    public function generateSpatial(Request $request)
    {
        $data = session('data', []);
        $columns = session('columns', []);
        $selectedColumns = $request->input('columns', []);
        $columnNames = $data[0];
        $dataset = [];

        // Find the indexes of latitude and longitude columns
        $latitudeIndex = array_search('latitude', $columnNames);
        $longitudeIndex = array_search('longitude', $columnNames);

        // Extract latitude and longitude values from the data
        foreach ($data as $rowIndex => $row) {
            if ($rowIndex === 0) {
                // Skip the header row
                continue;
            }

            $latitude = $row[$latitudeIndex];
            $longitude = $row[$longitudeIndex];

            $dataset[] = [
                'latitude' => $latitude,
                'longitude' => $longitude,
            ];
        }

        // Pass $dataset to the 'spatial' view or store it in the session for further use
        // For example, you can pass it to the view as follows:
        return redirect('spatial');
    }

    public function displayDashboard(Request $request)
    {
        // Retrieve the selected column and chart values from the form submission
        $selectedCharts = [];
        for ($i = 1; $i <= 5; $i++) {
            $chartType = $request->input('chartType' . $i);
            $column = $request->input('column' . $i);

            $selectedCharts[] = [
                'chartType' => $chartType,
                'column' => $column,
            ];
        }

        // Generate the graphs based on the selected charts
        foreach ($selectedCharts as $chart) {
            if ($chart['chartType'] === 'verticalBarChart') {
                // Generate the vertical bar chart using the selected column data
                $column_selected = [$chart['column']];
                // Your logic to generate the vertical bar chart based on the $column
                $data = session('data', []);
                $columns = session('columns', []);
                $columnNames = $data[0];
                $dataset = [];

                for ($i = 1; $i < count($data); $i++) {
                    $rowData = $data[$i];
                    $row = [];

                    for ($j = 0; $j < count($columnNames); $j++) {
                        $columnName = $columnNames[$j];
                        $row[$columnName] = $rowData[$j];
                    }

                    $dataset[] = $row;
                    
                }
                $selectedData = [];
                foreach ($dataset as $rowIndex => $row) {
                    $filteredRow = [];

                    foreach ($column_selected as $columnName) {
                        if (isset($row[$columnName])) {
                            $filteredRow[$columnName] = $row[$columnName];
                        }
                    }

                    $selectedData[] = $filteredRow;
                }

           
                // Store the selected data in the session
                $request->session()->put('selectedData', $selectedData);
                // Store the generated chart in a variable or pass it to the view as needed
                 // Retrieve the selected data from the session
                $this->selectedData = session('selectedData', []);
                

                $labels = array_keys($this->selectedData[0]);
                $column = implode(', ', array_keys($this->selectedData[0]));
                // Get the counts of "ZON" values
                $columnData = array_column($this->selectedData, $column);
                $filteredData = array_filter($columnData, function ($value) {
                    return is_string($value) || is_int($value);
                });
                $ValueCounts = array_count_values($filteredData);
                
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
                ->setAnimated(true)
                ->setColors($colors)
                ->withDataLabels();

                // Add column data for the counts
                foreach ($chartData as $data) {
                    $verticalBarChart->addColumn($data['Category'], $data['Count'], '#f6ad55');
                }

                // Store the generated chart in an array
                $generatedCharts[] = [
                    'chartType' => "verticalBarChart",
                    'column' => $column,
                    'chart' => $verticalBarChart,
                ];

            } elseif ($chart['chartType'] === 'horizontalBarChart') {
                // Generate the vertical bar chart using the selected column data
                $column_selected = [$chart['column']];
                // Your logic to generate the vertical bar chart based on the $column
                $data = session('data', []);
                $columns = session('columns', []);
                $columnNames = $data[0];
                $dataset = [];

                for ($i = 1; $i < count($data); $i++) {
                    $rowData = $data[$i];
                    $row = [];

                    for ($j = 0; $j < count($columnNames); $j++) {
                        $columnName = $columnNames[$j];
                        $row[$columnName] = $rowData[$j];
                    }

                    $dataset[] = $row;
                    
                }
                $selectedData = [];
                foreach ($dataset as $rowIndex => $row) {
                    $filteredRow = [];

                    foreach ($column_selected as $columnName) {
                        if (isset($row[$columnName])) {
                            $filteredRow[$columnName] = $row[$columnName];
                        }
                    }

                    $selectedData[] = $filteredRow;
                }

           
                // Store the selected data in the session
                $request->session()->put('selectedData', $selectedData);
                // Store the generated chart in a variable or pass it to the view as needed
                 // Retrieve the selected data from the session
                $this->selectedData = session('selectedData', []);
                

                $labels = array_keys($this->selectedData[0]);
                $column = implode(', ', array_keys($this->selectedData[0]));
                // Get the counts of "ZON" values
                $columnData = array_column($this->selectedData, $column);
                $filteredData = array_filter($columnData, function ($value) {
                    return is_string($value) || is_int($value);
                });
                $ValueCounts = array_count_values($filteredData);
                
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
                $horizontalBarChart = LivewireCharts::columnChartModel()
                ->setAnimated(true)
                ->setColors($colors)
                ->withDataLabels()
                ->setHorizontal(true);

                // Add column data for the counts
                foreach ($chartData as $data) {
                    $horizontalBarChart->addColumn($data['Category'], $data['Count'], '#f6ad55');
                }

                // Store the generated chart in an array
                $generatedCharts[] = [
                    'chartType' => "horizontalBarChart",
                    'column' => $column,
                    'chart' => $horizontalBarChart,
                ];
            } elseif ($chart['chartType'] === 'pieChart') {
                // Generate the vertical bar chart using the selected column data
                $column_selected = [$chart['column']];
                // Your logic to generate the vertical bar chart based on the $column
                $data = session('data', []);
                $columns = session('columns', []);
                $columnNames = $data[0];
                $dataset = [];

                for ($i = 1; $i < count($data); $i++) {
                    $rowData = $data[$i];
                    $row = [];

                    for ($j = 0; $j < count($columnNames); $j++) {
                        $columnName = $columnNames[$j];
                        $row[$columnName] = $rowData[$j];
                    }

                    $dataset[] = $row;
                    
                }
                $selectedData = [];
                foreach ($dataset as $rowIndex => $row) {
                    $filteredRow = [];

                    foreach ($column_selected as $columnName) {
                        if (isset($row[$columnName])) {
                            $filteredRow[$columnName] = $row[$columnName];
                        }
                    }

                    $selectedData[] = $filteredRow;
                }

           
                // Store the selected data in the session
                $request->session()->put('selectedData', $selectedData);
                // Store the generated chart in a variable or pass it to the view as needed
                 // Retrieve the selected data from the session
                $this->selectedData = session('selectedData', []);
                

                $labels = array_keys($this->selectedData[0]);
                $column = implode(', ', array_keys($this->selectedData[0]));
                // Get the counts of "ZON" values
                $columnData = array_column($this->selectedData, $column);
                $filteredData = array_filter($columnData, function ($value) {
                    return is_string($value) || is_int($value);
                });
                $ValueCounts = array_count_values($filteredData);
                
                // Create an array for the chart data
                $chartData = [];
                foreach ($ValueCounts as $value => $count) {
                    $chartData[] = [
                        'Category' => $value,
                        'Count' => $count,
                    ];
                }
                
                $colors = ['#3366cc', '#dc3912', '#ff9900', '#109618', '#990099', '#0099c6'];

                // Pie Chart
                $pieChart = LivewireCharts::pieChartModel()
                ->setColors($colors);

                // Add slices to the pie chart
                foreach ($ValueCounts as $value => $count) {
                $pieChart->addSlice($value, $count, '#f6ad55');
                }

                // Store the generated chart in an array
                $generatedCharts[] = [
                    'chartType' => "pieChart",
                    'column' => $column,
                    'chart' => $pieChart,
                ];
            } elseif ($chart['chartType'] === 'BarChart') {
                $data = session('data', []);
                $columns = session('columns', []);
                $selectedColumns = [$chart['column']];

                $columnNames = $data[0];
                $dataset = [];

                $dateColumn = null; // Variable to store the date column
                $selectedData = []; // Variable to store the selected data

                for ($i = 1; $i < count($data); $i++) {
                    $rowData = $data[$i];
                    $row = [];

                    for ($j = 0; $j < count($columnNames); $j++) {
                        $columnName = $columnNames[$j];
                        $row[$columnName] = $rowData[$j];

                        // Check if the column has a date datatype
                        if (str_contains(strtolower($columnName), 'date') || str_contains(strtolower($columnName), 'tarikh') || str_contains(strtolower($columnName), 'time'))  {
                            $dateColumn = $columnName;
                        }
                    }

                    $dataset[] = $row;
                }


                foreach ($dataset as $rowIndex => $row) {
                    $filteredRow = [];

                    foreach ($selectedColumns as $columnName) {
                        if (isset($row[$columnName])) {
                            $filteredRow[$columnName] = $row[$columnName];
                        }
                    }

                    // Add the date column data to the selected data
                    if ($dateColumn !== null && isset($row[$dateColumn])) {
                        $filteredRow['Date'] = $row[$dateColumn];
                    }

                    $selectedData[] = $filteredRow;
                }

                // Store the selected data in the session
                $request->session()->put('selectedData', $selectedData);

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

                $barChart = new TimeSeriesChart;
                $barChart->labels(array_column($groupedData, 'name'));
                $barChart->dataset('Time Series Data', 'bar', array_column($groupedData, 'data'))
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


                    // Store the generated chart in an array
                $generatedCharts[] = [
                    'chartType' => "BarChart",
                    'column' => $column,
                    'chart' => $barChart,
                ];
            } elseif ($chart['chartType'] === 'LineChart'){
                $data = session('data', []);
                $columns = session('columns', []);
                $selectedColumns = [$chart['column']];

                $columnNames = $data[0];
                $dataset = [];

                $dateColumn = null; // Variable to store the date column
                $selectedData = []; // Variable to store the selected data

                for ($i = 1; $i < count($data); $i++) {
                    $rowData = $data[$i];
                    $row = [];

                    for ($j = 0; $j < count($columnNames); $j++) {
                        $columnName = $columnNames[$j];
                        $row[$columnName] = $rowData[$j];

                        // Check if the column has a date datatype
                        if (str_contains(strtolower($columnName), 'date') || str_contains(strtolower($columnName), 'tarikh') || str_contains(strtolower($columnName), 'time'))  {
                            $dateColumn = $columnName;
                        }
                    }

                    $dataset[] = $row;
                }

                foreach ($dataset as $rowIndex => $row) {
                    $filteredRow = [];

                    foreach ($selectedColumns as $columnName) {
                        if (isset($row[$columnName])) {
                            $filteredRow[$columnName] = $row[$columnName];
                        }
                    }

                    // Add the date column data to the selected data
                    if ($dateColumn !== null && isset($row[$dateColumn])) {
                        $filteredRow['Date'] = $row[$dateColumn];
                    }

                    $selectedData[] = $filteredRow;
                }

                // Store the selected data in the session
                $request->session()->put('selectedData', $selectedData);

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

                $lineChart = new TimeSeriesChart;
                $lineChart->labels(array_column($groupedData, 'name'));
                $lineChart->dataset('Time Series Data', 'line', array_column($groupedData, 'data'))
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


                    // Store the generated chart in an array
                $generatedCharts[] = [
                    'chartType' => "LineChart",
                    'column' => $column,
                    'chart' => $lineChart,
                ];


            }

            // Store the selected data in the session
            $request->session()->put('generatedCharts', $generatedCharts);
            // Repeat the above code for any other chart types you want to handle
        }

        // Pass the selected charts and generated graphs to the view
        return redirect('displayDashboard');
    }

}
