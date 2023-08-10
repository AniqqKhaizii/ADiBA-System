<div class="p-4">
    <form method="POST" action="{{ route('generate-timeseries') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label for="columns" class="block text-gray-700 font-bold mb-2">Select columns:</label>
            <select name="columns[]" id="columns" multiple class="w-full border-gray-300 border rounded px-3 py-2">
                @foreach ($columns as $column)
                    <option value="{{ $column }}" class="py-1">{{ $column }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex items-center justify-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Generate Graph
            </button>
        </div>
    </form>
</div>
