<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-5 p-10 max-w-xlg bg-white rounded-lg shadow-md mt-10">
        @if (session('success'))
            <div class="bg-green-500 text-white py-4 px-6 mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('display-dashboard') }}">
            @csrf

            <h1 class="text-3xl font-semibold mb-6">Graph Configuration</h1>

            <!-- Categorical Chart Section -->
            <div class="mb-8">
            <h2 class="text-xl text-white font-semibold bg-red-900 p-2 mb-4">Categorical Chart</h2>

                <div class="grid grid-cols-2 gap-4 mb-4">
                    @for ($i = 1; $i <= 3; $i++)
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Chart {{ $i }}</h3>

                            <div class="flex items-center mb-2">
                                <label for="column{{ $i }}" class="w-1/3 text-gray-700">Select Column:</label>
                                <select name="column{{ $i }}" id="column{{ $i }}" class="w-2/3 border rounded px-3 py-2">
                                    @foreach ($columns1 as $column)
                                        <option value="{{ $column }}">{{ $column }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="flex items-center mb-4">
                                <label for="chartType{{ $i }}" class="w-1/3 text-gray-700">Select Chart Type:</label>
                                <select name="chartType{{ $i }}" id="chartType{{ $i }}" class="w-2/3 border rounded px-3 py-2">
                                    <option value="verticalBarChart">Vertical Bar Chart</option>
                                    <option value="horizontalBarChart">Horizontal Bar Chart</option>
                                    <option value="pieChart">Pie Chart</option>
                                </select>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

            <!-- Time Series Chart Section -->
            <div class="mb-8">
                <h2 class="text-xl text-white font-semibold bg-red-900 p-2 mb-4">Time Series Chart</h2>

                <div class="grid grid-cols-2 gap-4 mb-4">
                    @for ($i = 4; $i <= 5; $i++)
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Chart {{ $i }}</h3>

                            <div class="flex items-center mb-2">
                                <label for="column{{ $i }}" class="w-1/3 text-gray-700">Select Column:</label>
                                <select name="column{{ $i }}" id="column{{ $i }}" class="w-2/3 border rounded px-3 py-2">
                                    @foreach ($columns2 as $column)
                                        <option value="{{ $column }}">{{ $column }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="flex items-center mb-4">
                                <label for="chartType{{ $i }}" class="w-1/3 text-gray-700">Select Chart Type:</label>
                                <select name="chartType{{ $i }}" id="chartType{{ $i }}" class="w-2/3 border rounded px-3 py-2">
                                    <option value="BarChart">Bar Chart</option>
                                    <option value="LineChart">Line Chart</option>
                                </select>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-6 hover:bg-blue-600">Generate Graph</button>
        </form>
    </div>
</body>
</html>
