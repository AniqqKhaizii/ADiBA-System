<!-- display-dashboard.blade.php -->
<!DOCTYPE html>
<html>
@livewireChartsScripts
<head>
    <!-- Your chart library scripts here... -->
    <title>Analytics Dashboard</title>
    <style>
    .container {
        display: grid;
        grid-template-columns: 0.9fr 0.6fr 1fr;
        grid-template-rows: 0.1fr 1fr 1fr;
        gap: 5px 5px;
        grid-auto-flow: row;
        grid-template-areas:
            "Dashboard-Title Dashboard-Title Dashboard-Title"
            "Chart-1 Chart-1 Chart-2"
            "Chart-3 Chart-4 Chart-5";
        background-color: #f0f0f0;
        padding: 20px;
    }
    
    .Dashboard-Title {
        grid-area: Dashboard-Title;
        font-size: 24px;
        font-weight: bold;
    }

    .dashboard-chart {
        background-color: #fff;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 20px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1); /* Add box shadow */
    }

    .Chart-1 {
        grid-area: Chart-1;
        background-color: #c0c0c0; /* Add desired background color for Chart-1 */
    }

    .Chart-2 {
        grid-area: Chart-2;
        background-color: #c0c0c0; /* Add desired background color for Chart-2 */
    }

    .Chart-3 {
        grid-area: Chart-3;
        background-color: #c0c0c0; /* Add desired background color for Chart-3 */
    }

    .Chart-4 {
        grid-area: Chart-4;
        background-color: #c0c0c0; /* Add desired background color for Chart-4 */
    }

    .Chart-5 {
        grid-area: Chart-5;
        background-color: #c0c0c0; /* Add desired background color for Chart-5 */
    }
</style>
</head>
<body>
    <div class="container">
        <div class="Dashboard-Title">Dashboard Title</div>

        {{-- Render all charts --}}
        @php $priorityChartRendered = false; @endphp
        @php $otherChartRendered = false; @endphp
        @foreach ($generatedCharts as $chart)
            @if ($chart['chartType'] === 'BarChart' || $chart['chartType'] === 'LineChart')
                @if (!$priorityChartRendered)
                    <div class="Chart-1 priority">
                        {!! $chart['chart']->container() !!}
                        {!! $chart['chart']->script() !!}
                    </div>
                    @php $priorityChartRendered = true; @endphp
                @elseif (!$otherChartRendered)
                    <div class="Chart-5">
                        {!! $chart['chart']->container() !!}
                        {!! $chart['chart']->script() !!}
                    </div>
                    @php $otherChartRendered = true; @endphp
                @endif
            @else
                <div class="{{ 'Chart-' . ($loop->index + 2) }}">
                    @if ($chart['chartType'] === 'verticalBarChart')
                        <livewire:livewire-column-chart :column-chart-model="$chart['chart']" />
                    @elseif ($chart['chartType'] === 'horizontalBarChart')
                        <livewire:livewire-column-chart :column-chart-model="$chart['chart']" />
                    @elseif ($chart['chartType'] === 'pieChart')
                        <livewire:livewire-pie-chart :pie-chart-model="$chart['chart']" />
                    @endif
                </div>
            @endif
        @endforeach

        {{-- If no priority chart or other chart found, render an empty Chart-5 cell --}}
        @if (!$priorityChartRendered && !$otherChartRendered)
            <div class="Chart-5"></div>
        @endif
    </div>
</body>
</html>
