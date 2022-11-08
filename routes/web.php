<?php

use App\Http\Controllers\LandingController;
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
    return view('landingpage.halutama');
});

Route::get('/jurusan', [LandingController::class, 'jurusan']);
Route::get('/tkr', [LandingController::class, 'tkr']);
Route::get('/tei', [LandingController::class, 'tei']);
Route::get('/rpl', [LandingController::class, 'rpl']);