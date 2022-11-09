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

//==Route profil==//
Route::get('/profil/visimisi', [LandingController::class, 'visimisi']);

//==Route jurusan==//
Route::get('/jurusan', [LandingController::class, 'jurusan']);
Route::get('/tkr', [LandingController::class, 'tkr']);
Route::get('/tei', [LandingController::class, 'tei']);
Route::get('/rpl', [LandingController::class, 'rpl']);
Route::get('/tki', [LandingController::class, 'tki']);
Route::get('/tav', [LandingController::class, 'tav']);

Route::get('/modulproduktiftkr', [LandingController::class, 'modulproduktiftkr']);
Route::get('/reparasibengkel', [LandingController::class, 'reparasibengkel']);
Route::get('/modulproduktiftei', [LandingController::class, 'modulproduktiftei']);