<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('metrics')->insert([
            [
                'name' => 'Patient Wait Times',
                'image' => 'images/patientWait.png',
                'industry_id' => 1,
                'position_id' => 2,
            ],
            [
                'name' => 'Staffing Levels',
                'image' => 'images/staffingLevels.png',
                'industry_id' => 1,
                'position_id' => 2,
            ],
            [
                'name' => 'Patient Satisfaction',
                'image' => 'images/patientSatisfaction.png',
                'industry_id' => 1,
                'position_id' => 2,
            ],
            [
                'name' => 'Appointment Cancellation',
                'image' => 'images/appointment.png',
                'industry_id' => 1,
                'position_id' => 2,
            ],
            [
                'name' => 'Hospital Readmission Rate',
                'image' => 'images/ReadmissionRate.png',
                'industry_id' => 1,
                'position_id' => 1,
            ],
            [
                'name' => 'Medication Error Rates',
                'image' => 'images/MedicationErrorRate.png',
                'industry_id' => 1,
                'position_id' => 1,
            ],
            [
                'name' => 'Surgical Site Infection Rate',
                'image' => 'images/SSI.png',
                'industry_id' => 1,
                'position_id' => 1,
            ],
            [
                'name' => 'Bed Occupancy Rate',
                'image' => 'images/BOR.png',
                'industry_id' => 1,
                'position_id' => 1,
            ],
            [
                'name' => 'Revenue by Service Line',
                'image' => 'images/RBSL.png',
                'industry_id' => 1,
                'position_id' => 3,
            ],
            [
                'name' => 'Cost per Patient',
                'image' => 'images/CPP.png',
                'industry_id' => 1,
                'position_id' => 3,
            ],
            [
                'name' => 'Patient Demographics',
                'image' => 'images/PD.png',
                'industry_id' => 1,
                'position_id' => 3,
            ],
            [
                'name' => 'Physician and Nurse Turnover Rate',
                'image' => 'images/BOR.png',
                'industry_id' => 1,
                'position_id' => 3,
            ],
        ]);
    }
}
