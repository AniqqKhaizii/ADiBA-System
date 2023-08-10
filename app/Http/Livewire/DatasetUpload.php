<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use Livewire\Component;
use PhpOffice\PhpSpreadsheet\IOFactory;

class DatasetUpload extends Component
{
    public $file;
    public $values;
    public $dashboardType;
    public $target;
    use WithFileUploads;

    public function render()
    {
        return view('livewire.dataset-upload')
        ->layout('layouts.base');
    }
    public function upload()
    {
        $this->validate([
            'file' => 'required|mimes:xls,xlsx,csv'
        ]);

        $path = $this->file->getRealPath();

        $spreadsheet = IOFactory::load($path);
        $worksheet = $spreadsheet->getActiveSheet();

        $rows = [];

        foreach ($worksheet->getRowIterator() as $row) {
            $cellIterator = $row->getCellIterator();
            $cellIterator->setIterateOnlyExistingCells(false);

            $rowData = [];

            foreach ($cellIterator as $cell) {
                if ($row->getRowIndex() === 1) {
                    // Store column names
                    $columns[$cell->getColumn()] = $cell->getValue();
                }
                if (
                    str_contains(strtolower($columns[$cell->getColumn()]), 'date') ||
                    str_contains(strtolower($columns[$cell->getColumn()]), 'tarikh') ||
                    str_contains(strtolower($columns[$cell->getColumn()]), 'time')
                ) {
                    $cellValue = $cell->getValue();
                    if ($row->getRowIndex() !== 1 && is_numeric($cellValue)) {
                        // Convert integer to date if the column name contains date, tarikh, or time
                        $dateValue = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($cellValue);
                        $rowData[] = $dateValue->format('Y-m-d');
                    } else {
                        $rowData[] = $cellValue; // Store the value as-is if it is not a numeric date
                    }
                } else {
                    $rowData[] = $cell->getValue();
                }
            }
    
            $rows[] = $rowData;
        }

        $this->values = $rows;
        session(['data' => $rows, 'columns' => $columns]);
        
    }
    
    public function submit1()
    {
        if ($this->target == "") {
            return ("Please select an answer for each question.");
        } else {
            // logic to determine dashboard type based on $target and $position
            if ($this->target == 'operational') {
            $this->dashboardType = "Operational Dashboard";
            } else if ($this->target == 'analytical') {
            $this->dashboardType = "Analytical Dashboard";
            } else if ($this->target == 'strategical') {
            $this->dashboardType = "Strategic Dashboard";
            }
        }

        return $this->dashboardType;
        
    }
}