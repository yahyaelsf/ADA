<?php

use App\Http\Controllers\Front\AreaTakeoffController;
use App\Http\Controllers\Front\CalendarController;
use App\Http\Controllers\Front\CompanyController;
use App\Http\Controllers\Front\CountTakeoffController;
use App\Http\Controllers\Front\EstimateController;
use App\Http\Controllers\Front\LibraryController;
use App\Http\Controllers\Front\LinearTakeoffController;
use App\Http\Controllers\Front\PlanTakeoffController;
use App\Http\Controllers\Front\ProjectController;
use App\Http\Controllers\Front\ReportController;
use App\Http\Controllers\Front\SurfaceAreaController;
use App\Http\Controllers\ImageServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/img/{path}', [ImageServiceController::class, 'show'])->where('path', '.*');;
Route::get('/', function(){
    return view('welcome');
})->name('home');




