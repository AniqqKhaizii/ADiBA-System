<?php

use App\Http\Livewire\Analytical;
use App\Http\Livewire\Recommender;
use App\Http\Livewire\Introduction;
use App\Http\Livewire\Operational;
use App\Http\Livewire\Strategic;
use App\Http\Livewire\Templates;
use App\Http\Livewire\Tools;
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

Route::get('/recommender', Recommender::class);

Route::get('/introduction', Introduction::class);

Route::get('/operational', Operational::class);

Route::get('/analytical', Analytical::class);

Route::get('/strategic', Strategic::class);

Route::get('/templates', Templates::class);

Route::get('/tools', Tools::class);

