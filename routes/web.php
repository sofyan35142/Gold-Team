<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DataController;
use App\Models\Beranda;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::get('/bug', function () {
    return view('welcome');
});

//BERANDA
// Route::get('/', function () {
//     return view('landingpage.beranda.beranda');
// });
Route::get('/', [LandingController::class, 'beranda']);
Route::get('/keahlian', [LandingController::class, 'keahlian']);
Route::get('/lokerbkk', [LandingController::class, 'lokerbkk']);
Route::get('/agenda', [LandingController::class, 'agenda']);
Route::get('/guruu', [LandingController::class, 'guru']);
Route::get('/agendadetail', [LandingController::class, 'agendadetail']);
Route::get('/blogbanyak', [LandingController::class, 'blogbanyak']);

//DATA
Route::get('/data/dharmaa', [LandingController::class, 'dharma']);
Route::get('/data/datawalas', [LandingController::class, 'datawalas']);
Route::get('/data/ekstraa', [LandingController::class, 'ekstra']);
Route::get('/data/prestasi', [LandingController::class, 'prestasi']);
Route::get('/ekstradetail', [LandingController::class, 'detailekstra']);
Route::get('/prestasidetail', [LandingController::class, 'detailprestasi']);


// ==ROUTE ALUMNI==//
Route::get('/alumni/testimoni', [LandingController::class, 'testimonialumni']);
Route::get('/alumni/profilealumni', [LandingController::class, 'profilealumni']);


// start profil
Route::get('/profil', [LandingController::class, 'profil']);
Route::get('/profil/visimisi', [LandingController::class, 'visimisi']);
Route::get('/profil/strukturorganisasi', [LandingController::class, 'strukturorganisasi']);
Route::get('/profil/sejarahsingkat', [LandingController::class, 'sejarahsingkat']);
Route::get('/profil/sekolahadiwiyata', [LandingController::class, 'sekolahadiwiyata']);
Route::get('/profil/sekolahrujukan', [LandingController::class, 'sekolahrujukan']);
// end profil

// start bkk
Route::get('/BKK', [LandingController::class, 'BKK']);
Route::get('/BKK/visimisi-bkk', [LandingController::class, 'visimisi_bkk']);
Route::get('/BKK/strukturorganisasi-bkk', [LandingController::class, 'strukturorganisasi_bkk']);
Route::get('/BKK/kegiatan-bkk', [LandingController::class, 'kegiatan_bkk']);
Route::get('/BKK/detail-kegiatan-bkk', [LandingController::class, 'detail_kegiatan_bkk']);
Route::get('/BKK/kewirausahaan-bkk', [LandingController::class, 'kewirausahaan_bkk']);
Route::get('/BKK/lowongan-kerja', [LandingController::class, 'lowongan_kerja']);
Route::get('/BKK/detail-lowongan', [LandingController::class, 'detail_lowongan']);
Route::get('/BKK/bimbingan-karir', [LandingController::class, 'bimbingan_karir']);
Route::get('/BKK/perusahaan-mitra', [LandingController::class, 'perusahaan_mitra']);
// end bkk

//JURUSAN
Route::get('/jurusan', [LandingController::class, 'jurusan']);
Route::get('/detailjurusan/{id}', [LandingController::class, 'detailjurusan']);
Route::get('/tkr', [LandingController::class, 'tkr']);
Route::get('/tei', [LandingController::class, 'tei']);
Route::get('/rpl', [LandingController::class, 'rpl']);
Route::get('/tki', [LandingController::class, 'tki']);
Route::get('/tav', [LandingController::class, 'tav']);
Route::get('/modulproduktiftkr', [LandingController::class, 'modulproduktiftkr']);
Route::get('/reparasibengkel', [LandingController::class, 'reparasibengkel']);
Route::get('/modulproduktiftei', [LandingController::class, 'modulproduktiftei']);
Route::get('/modulproduktifrpl', [LandingController::class, 'modulproduktifrpl']);
Route::get('/artikelilmiah', [LandingController::class, 'artikelilmiah']);
Route::get('/modulproduktiftki', [LandingController::class, 'modulproduktiftki']);
Route::get('/modulproduktiftav', [LandingController::class, 'modulproduktiftav']);


//LSP
Route::get('/lsp', [LandingController::class, 'lsp']);
Route::get('/visimisilsp', [LandingController::class, 'visimisilsp']);
Route::get('/skematerlisensi', [LandingController::class, 'skematerlisensi']);
Route::get('/tempatujikom', [LandingController::class, 'tempatujikom']);
Route::get('/jmlpemegangsertifikat', [LandingController::class, 'jmlpemegangsertifikat']);


//StartAdmin
Route::get('/index', [Admincontroller::class, 'index']);


// Jurusan Admin
Route::get('/index/jurusan', [JurusanController::class, 'jurusanview'])->name('jurusanview');
Route::get('/index/tambahjurusan', [JurusanController::class, 'tambahjurusan']);
Route::post('/insertjurusan', [JurusanController::class, 'insertjurusan']);
Route::get('/jurusan/edit/{id}', [JurusanController::class, 'editjurusan']);
Route::post('jurusan/update/{id}', [JurusanController::class, 'updatejurusan']);
Route::get('/jurusan/deletejurusan/{id}', [JurusanController::class, 'deletejurusan']);

<<<<<<< HEAD
// start profil sekolah-admin
    // visi misi
Route::get('/index/profil', [Admincontroller::class, 'profilvisimisi']);
Route::get('/index/addprofilvisimisi', [Admincontroller::class, 'addprofilvisimisi']);
Route::post('/insertprofilvisimisi', [Admincontroller::class, 'insertprofilvisimisi']);
Route::get('/visimisi/delete/{id}', [Admincontroller::class, 'deletevisimisi']);
Route::get('/visimisi/edit/{id}', [Admincontroller::class, 'editviewvisimisi']);
Route::post('/editvisimisi/{id}', [Admincontroller::class, 'editvisimisi']);
    // struktur organisasi
Route::get('/index/strukturorganisasi', [Admincontroller::class, 'strukturorganisasi']);
Route::get('/index/addstrukturorganisasi', [Admincontroller::class, 'addstrukturorganisasi']);
Route::get('/index/editstrukturorganisasi', [Admincontroller::class, 'editstrukturorganisasi']);
// end profil sekolah-admin
=======
////////////-------------ADMIN BERANDA------------/////////////////
Route::get('/beranda/blog', [BerandaController::class, 'viewblog'])->name('viewblog');
Route::get('/beranda/tambahblog', [BerandaController::class, 'tambahblog']);
Route::post('/insertblog', [BerandaController::class, 'insertblog']);
Route::get('/beranda/editblog/{id}', [BerandaController::class, 'editblog']);
Route::post('/beranda/updateblog/{id}', [BerandaController::class, 'updateblog']);
Route::get('/blog/deleteblog/{id}', [BerandaController::class, 'deleteblog']);

///////////////-----------------------DataAdmin-------------------------//////////////

//EKSTRA
Route::get('/data/ekstra', [DataController::class, 'ekstra'])->name('ekstra');
Route::get('/data/tambahekstra', [DataController::class, 'tambahekstra']);
Route::post('/insertekstra', [DataController::class, 'insertekstra']);
Route::get('/data/editekstra/{id}', [DataController::class, 'editekstra']);
Route::post('/data/updateekstra/{id}', [DataController::class, 'updateekstra']);
Route::get('/data/deleteekstra/{id}', [DataController::class, 'deleteekstra']);

//Guru
Route::get('/data/guru', [DataController::class, 'guru'])->name('guru');
Route::get('/data/tambahguru', [DataController::class, 'tambahguru']);
Route::post('/insertguru', [DataController::class, 'insertguru']);
Route::get('/data/editguru/{id}', [DataController::class, 'editguru']);
Route::post('/data/updateguru/{id}', [DataController::class, 'updateguru']);
Route::get('/data/deleteguru/{id}', [DataController::class, 'deleteguru']);

//DHARMAWANITA
Route::get('/data/dharma', [DataController::class, 'dharma'])->name('dharma');
Route::get('/data/tambahdharma', [DataController::class, 'tambahdharma']);
Route::post('/insertdharma', [DataController::class, 'insertdharma']);
Route::get('/data/editdharma/{id}', [DataController::class, 'editdharma']);
Route::post('/data/updatedharma/{id}', [DataController::class, 'updatedharma']);
Route::get('/data/deletedharma/{id}', [DataController::class, 'deletedharma']);


//Prestasi
Route::get('/data/prestasii', [DataController::class, 'prestasi'])->name('prestasi');
Route::get('/data/tambahprestasi', [DataController::class, 'tambahprestasi']);
Route::post('/insertprestasi', [DataController::class, 'insertprestasi']);
Route::get('/data/editprestasi/{id}', [DataController::class, 'editprestasi']);
Route::post('/data/updateprestasi/{id}', [DataController::class, 'updateprestasi']);
Route::get('/data/deleteprestasi/{id}', [DataController::class, 'deleteprestasi']);
>>>>>>> ccbfb0d8f6eab737101ee148fbeacf37d6633f7c
