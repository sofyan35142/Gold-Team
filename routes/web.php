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
     //======================== LANDING PAGE ========================//
Route::get('/', function () {
    return view('landingpage.halutama');
});
Route::get('/bug', function () {
    return view('welcome');
});

Route::get('/jurusan', [LandingController::class, 'jurusan']);
//==Route profil==//
Route::get('/profil/visimisi', [LandingController::class, 'visimisi']);


<<<<<<< HEAD
Route::get('/jurusan', [LandingController::class, 'jurusan']);
Route::get('/tkr', [LandingController::class, 'tkr']);
Route::get('/tei', [LandingController::class, 'tei']);
Route::get('/rpl', [LandingController::class, 'rpl']);
=======
>>>>>>> 732b2ba1a8f9deeb1263dfe58b9b2088349bd8c8
