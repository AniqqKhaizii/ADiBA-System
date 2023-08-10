<!DOCTYPE html>
<html>
<head>
    <title>Time Series Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/fusioncharts@3.12.2/fusioncharts.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/frappe-charts@1.1.0/dist/frappe-charts.min.iife.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.7.0/d3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.6.7/c3.min.js"></script>
</head>
<body>
    <div class="container">

    <div class="shadow rounded p-4 border bg-white mb-[15px] mr-[30px]" style="height: 32rem; w-fill">
        {!! $chart1->container() !!}
        {!! $chart1->script() !!}
    </div>
    <div class="shadow rounded p-4 border bg-white mb-[15px] mr-[30px]" style="height: 32rem; w-fill">
        {!! $chart2->container() !!}
        {!! $chart2->script() !!}
    </div>

    <div class="flex-row row">

    <button onclick="window.location.href='/ADiBA/public/datatype'" class="bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        Select another Data Type
    </button>
    <button onclick="window.location.href='/ADiBA/public/tsSelection'" class="bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        Select another Column
    </button>
    <button onclick="window.location.href='/ADiBA/public/dashboard'" class="bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        Develop Your Dashboard !
    </button>
    

    </div>
</body>
</html>