<?php

namespace App\Http\Controllers;

use App\Models\Metric;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getMetricsDetail($id)
    {
        $metrics = Metric::find($id);

        return view('recommender-selected', compact('metrics','id'));
    }

}
