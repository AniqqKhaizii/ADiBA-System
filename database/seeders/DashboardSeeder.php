<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dashboards')->insert([
            [
            'name' => 'Patient Wait Times'
            ],
            [
            'name' => 'Manager'
            ],
            [
            'name' => 'Executive'
            ]
        ]);
    }
}
