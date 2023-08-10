<head>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<div>
    <div class='text-xl font-bold'>
        1. Vertical Bar Chart
        <div>
    <!-- Vertical Bar Chart -->
    <div class="shadow rounded p-4 border bg-white mb-[15px] mr-[30px]" style="height: 32rem; w-fill">
        <livewire:livewire-column-chart
        :column-chart-model="$verticalBarChart"
        />
    </div>

    <div class='text-xl font-bold'>
        2. Horizontal Bar Chart
        <div>
    <!-- Horizontal Bar Chart -->
    <div class="shadow rounded p-4 border bg-white mb-[15px] mr-[30px]" style="height: 32rem; w-fill">
        <livewire:livewire-column-chart
            :column-chart-model="$horizontalBarChart"
            :key="'horizontal-bar-chart'"
        />
    </div>

    <div class='text-xl font-bold'>
        3. Pie Chart
        <div>
    <!-- Pie Chart -->
    <div class="shadow rounded p-4 border bg-white mb-[15px] mr-[30px]" style="height: 32rem; w-fill">
        <livewire:livewire-pie-chart
            :pie-chart-model="$pieChart"
            :key="'pie-chart'"
        />
    </div>

    <div class="flex-row row">

    <button onclick="window.location.href='/ADiBA/public/datatype'" class="bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        Select another Data Type
    </button>
    <button onclick="window.location.href='/ADiBA/public/graph-selection'" class="bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        Select another Column
    </button>
    <button onclick="window.location.href='/ADiBA/public/dashboard'" class="bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        Develop Your Dashboard !
    </button>
</div>

    
    <livewire:scripts />
@livewireChartsScripts
    
</div>