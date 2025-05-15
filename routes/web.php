<?php

use App\Http\Controllers\Front\AreaTakeoffController;
use App\Http\Controllers\Front\CalendarController;
use App\Http\Controllers\Front\CompanyController;
use App\Http\Controllers\Front\CountTakeoffController;
use App\Http\Controllers\Front\EstimateController;
use App\Http\Controllers\Front\HomeController;
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
Route::get('/', [HomeController::class , 'home'])->name('front.home');
Route::get('/about-us', [HomeController::class , 'about'])->name('front.about');
Route::get('/vision', [HomeController::class , 'vision'])->name('front.vision');
Route::get('/mission', [HomeController::class , 'mission'])->name('front.mission');
Route::get('/value', [HomeController::class , 'value'])->name('front.value');
Route::get('/news', [HomeController::class , 'news'])->name('front.news');
Route::get('/article', [HomeController::class , 'article'])->name('front.article');
Route::get('/project', [HomeController::class , 'project'])->name('front.project');
Route::get('/program', [HomeController::class , 'program'])->name('front.program');
Route::get('/governance', [HomeController::class , 'governance'])->name('front.governance');
Route::get('/board-of-directore', [HomeController::class , 'boardOfDirectore'])->name('front.boardOfDirectore');
Route::get('/partners', [HomeController::class , 'partners'])->name('front.partners');




