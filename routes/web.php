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
<<<<<<< HEAD
// ==Route profil==//
=======
<<<<<<< HEAD
Route::get('/guru', [LandingController::class, 'guru']);
=======
//==Route profil==//
>>>>>>> 7375d8512b2e92a9e1932b6ad2555a2411a9ddab
Route::get('/profil/visimisi', [LandingController::class, 'visimisi']);
Route::get('/profil/strukturorganisasi', [LandingController::class, 'strukturorganisasi']);
Route::get('/profil/sejarahsingkat', [LandingController::class, 'sejarahsingkat']);
Route::get('/profil/sekolahadiwiyata', [LandingController::class, 'sekolahadiwiyata']);
Route::get('/profil/sekolahrujukan', [LandingController::class, 'sekolahrujukan']);


<<<<<<< HEAD
Route::get('/jurusan', [LandingController::class, 'jurusan']);
Route::get('/tkr', [LandingController::class, 'tkr']);
Route::get('/tei', [LandingController::class, 'tei']);
Route::get('/rpl', [LandingController::class, 'rpl']);
=======
>>>>>>> 732b2ba1a8f9deeb1263dfe58b9b2088349bd8c8
>>>>>>> a389aa753519fff94d96f2c62b35cb17e729e779
