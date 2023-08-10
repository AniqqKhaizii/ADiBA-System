<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Dataset;
use Illuminate\Support\Facades\Artisan;

class DatasetController extends Controller
{
    public function upload(Request $request)
    {
        $file = $request->file('dataset');

        // Save the uploaded file to a temporary location
        $path = $file->store('temp');

        // Get the absolute path of the uploaded file
        $absolutePath = Storage::path($path);

        // Extract column names using Pandas or other libraries
        $columnNames = $this->extractColumnNames($absolutePath);

        // Store the dataset and column names in the database
        $dataset = Dataset::create([
            'path' => $path,
            'column_names' => json_encode($columnNames),
        ]);

        // Further processing of the dataset
        // ...
    }

    private function extractColumnNames($filePath)
    {
        // Execute a Python script to extract column names using Pandas
        $command = "python " . public_path('scripts/extract_column_names.py') . " " . $filePath;
        $output = shell_exec($command);

        // Parse the output and extract column names
        $columnNames = explode(',', $output);

        return $columnNames;
    }
}
