<?php

use App\Http\Controllers\CorsController;
use App\Http\Controllers\SeasonsController;
use App\Http\Controllers\SeriesController;
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

Route::get('/', function () {
    return redirect('/series');
});

Route::resource('/series', SeriesController::class)
    ->only(['index', 'create', 'store', 'destroy', 'edit', 'update']);

Route::resource('/series/cor', CorsController::class)
    ->except(['show']);


Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])->name('seasons.index');






