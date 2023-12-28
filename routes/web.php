<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tripController;

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
    return view('home');
});

Route::get('/reservation',[tripController::class,'reservation']);
Route::post('/book',[tripController::class,'booking']);
Route::post('/get-seats',[tripController::class,'getSeats']);
