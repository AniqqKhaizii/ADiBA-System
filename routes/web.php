<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NextPageController;
use App\Http\Controllers\GraphController;
use App\Http\Livewire\Analytical;
use App\Http\Livewire\RecommenderNew;
use App\Http\Livewire\Introduction;
use App\Http\Livewire\Operational;
use App\Http\Livewire\RecommenderExample;
use App\Http\Livewire\RecommenderSelected;
use App\Http\Livewire\Strategic;
use App\Http\Livewire\Templates;
use App\Http\Livewire\Tools;
use App\Http\Livewire\RealdataPage;
use App\Http\Livewire\DatasetUpload;
use App\Http\Livewire\Datatype;
use App\Http\Livewire\SelectColumn;
use App\Http\Livewire\GraphSelection;
use App\Http\Livewire\Graph;
use App\Http\Livewire\TimeSeriesChartPage;
use App\Http\Livewire\TimeSeriesSelection;
use App\Http\Livewire\SpatialSelection;
use App\Http\Livewire\SpatialChart;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\DisplayDashboard;
use App\Http\Livewire\DataCollection;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\Template\Template;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('index');
});

Route::get('/tutorials', function () {
    return view('layouts.tutorials');
});

Route::get('/recommender', RecommenderNew::class);
Route::get('/example', RecommenderExample::class);
Route::get('/selected/{id}', [DashboardController::class, 'getMetricsDetail'])
        ->name('selected');;
Route::post('/selectcolumn', [NextPageController::class, 'index'])->name('selectcolumn');
Route::post('/generate-graph', [GraphController::class, 'generateGraph'])->name('generate-graph');
Route::post('/generate-timeseries', [GraphController::class, 'generateTimeSeries'])->name('generate-timeseries');
Route::post('/generate-spatial', [GraphController::class, 'generateSpatial'])->name('generate-spatial');

Route::get('/introduction', Introduction::class);

Route::get('/operational', Operational::class);

Route::get('/analytical', Analytical::class);

Route::get('/strategic', Strategic::class);

Route::get('/templates', Templates::class);

Route::get('/tools', Tools::class);

Route::get('/realdata', RealdataPage::class);

Route::get('/dataset-upload', DatasetUpload::class);

Route::get('/datatype', Datatype::class);

Route::get('/selectcolumn', SelectColumn::class);

Route::get('/graph-selection', GraphSelection::class);

Route::get('/graph', Graph::class);

Route::get('/categorical-graph', [GraphController::class, 'displayGraph'])->name('displayGraph');
Route::get('/timeseries-graph', [GraphController::class, 'displayTimeSeries'])->name('displayTimeSeries');
Route::post('/display-dashboard', [GraphController::class, 'displayDashboard'])->name('display-dashboard');

Route::get('/timeseries', TimeSeriesChartPage::class);

Route::get('/tsSelection', TimeSeriesSelection::class);

Route::get('/spatialSelection', SpatialSelection::class);

Route::get('/spatial', SpatialChart::class);

Route::get('/dashboard', Dashboard::class);

Route::get('/displayDashboard', DisplayDashboard::class);

Route::get('/dataCollection', DataCollection::class);

