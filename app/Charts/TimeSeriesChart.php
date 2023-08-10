<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class TimeSeriesChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->displayAxes(false, false);
        $this->displayLegend(false);
        $this->options([
            'scales' => [
                'xAxes' => [
                    'type' => 'time',
                    'time' => [
                        'unit' => 'day',
                        'displayFormats' => [
                            'day' => 'YYYY-MM-DD',
                        ],
                    ],
                ],
                'yAxes' => [
                    'ticks' => [
                        'beginAtZero' => true,
                    ],
                ],
            ],
        ]);
    }
    /**
     * Serialize the chart data to JSON.
     *
     * @return string
     */
    public function toJson($options = 0)
    {
        return json_encode($this, $options);
    }
    
    /**
     * Specify data which should be serialized to JSON.
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        return $this->options;
    }
}
