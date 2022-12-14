<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\SosmedController;
use App\Http\Controllers\KakomliController;
use App\Http\Controllers\kirimemailController;
use App\Http\Controllers\LSPController;
use App\Http\Controllers\ModulController;
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
Route::get('/blogdetail/{id}', [LandingController::class, 'blogdetail']);
Route::get('/blogselengkapnya', [LandingController::class, 'blogselengkapnya']);

//DATA
Route::get('/data', [LandingController::class, 'data']);
Route::get('/data/dharmaa', [LandingController::class, 'dharma']);
Route::get('/data/datawalas', [LandingController::class, 'datawalas']);
Route::get('/data/ekstraa', [LandingController::class, 'ekstra']);
Route::get('/data/prestasi', [LandingController::class, 'prestasi']);
Route::get('/ekstradetail/{id}', [LandingController::class, 'detailekstra']);
Route::get('/prestasidetail/{id}', [LandingController::class, 'detailprestasi']);


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
Route::get('/BKK/detail-kegiatan-bkk/{id}', [LandingController::class, 'detail_kegiatan_bkk']);
Route::get('/BKK/kewirausahaan-bkk', [LandingController::class, 'kewirausahaan_bkk']);
Route::get('/BKK/lowongan-kerja', [LandingController::class, 'lowongan_kerja'])->name('lowongan-kerja');
Route::get('/BKK/detail-lowongan/{id}', [LandingController::class, 'detail_lowongan']);
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
Route::get('/detailmodul/{id}', [LandingController::class, 'detailmodul']);
Route::get('/modulproduktiftkr', [LandingController::class, 'modulproduktiftkr']);
Route::get('/reparasibengkel', [LandingController::class, 'reparasibengkel']);
Route::get('/modulproduktiftei', [LandingController::class, 'modulproduktiftei']);
Route::get('/modulproduktifrpl', [LandingController::class, 'modulproduktifrpl']);
Route::get('/artikelilmiah', [LandingController::class, 'artikelilmiah']);
Route::get('/modulproduktiftki', [LandingController::class, 'modulproduktiftki']);
Route::get('/modulproduktiftav', [LandingController::class, 'modulproduktiftav']);

//layananortu
Route::get('/layananortu',[LandingController::class, 'layananortu'])->name('layananortu');
Route::post('/insertlayor', [LandingController::class, 'storelayor']);


//LSP
Route::get('/llsp', [LandingController::class, 'lsp']);
Route::get('/visimisilsp', [LandingController::class, 'visimisilsp']);
Route::get('/skematerlisensi', [LandingController::class, 'skematerlisensi']);
Route::get('/tempatujikom', [LandingController::class, 'tempatujikom']);
Route::get('/jmlpemegangsertifikat', [LandingController::class, 'jmlpemegangsertifikat']);


//StartAdmin

Route::get('/login', [Admincontroller::class, 'login'])->name('login');
Route::get('/gantipass', [Admincontroller::class, 'gantipass'])->name('gantipass');
Route::post('/postlogin', [Admincontroller::class, 'postlogin']);
Route::get('/index', [Admincontroller::class, 'index']);


// Jurusan Admin
Route::get('/index/jurusan', [JurusanController::class, 'jurusanview'])->name('jurusanview');
Route::get('/index/tambahjurusan', [JurusanController::class, 'tambahjurusan']);
Route::post('/insertjurusan', [JurusanController::class, 'insertjurusan']);
Route::get('/jurusan/edit/{id}', [JurusanController::class, 'editjurusan']);
Route::post('/jurusan/update/{id}', [JurusanController::class, 'updatejurusan']);
Route::get('/jurusan/deletejurusan/{id}', [JurusanController::class, 'deletejurusan']);

// start profil sekolah-admin
// profil
Route::get('/index/profil', [Admincontroller::class, 'profil']);
Route::post('/index/tambahprofil/{profil}', [Admincontroller::class, 'addprofil']);
Route::post('/insertprofil', [Admincontroller::class, 'insertprofil']);
Route::get('/profil/delete/{id}', [Admincontroller::class, 'deleteprofil']);
Route::get('/profil/edit/{id}', [Admincontroller::class, 'editviewvisimisi']);
// visi misi
Route::get('/index/profilvisimisi', [Admincontroller::class, 'profilvisimisi']);
Route::get('/index/addprofilvisimisi', [Admincontroller::class, 'addprofilvisimisi']);
Route::post('/insertprofilvisimisi', [Admincontroller::class, 'insertprofilvisimisi']);
Route::get('/visimisi/delete/{id}', [Admincontroller::class, 'deletevisimisi']);
Route::get('/visimisi/edit/{id}', [Admincontroller::class, 'editviewvisimisi']);
Route::post('/editvisimisi/{id}', [Admincontroller::class, 'editvisimisi']);
// struktur organisasi
Route::get('/index/strukturorganisasi', [Admincontroller::class, 'strukturorganisasi']);
// Route::get('/index/addstrukturorganisasi', [Admincontroller::class, 'addstrukturorganisasi']);
Route::post('/insertstrukturorganisasi', [Admincontroller::class, 'insertstrukturorganisasi']);
Route::get('/index/editstrukturorganisasi/{id}', [Admincontroller::class, 'editstrukturorganisasi']);
Route::post('/updatestrukturorganisasi/{id}', [Admincontroller::class, 'updatestrukturorganisasi']);
Route::get('/index/deletestrukturorganisasi/{id}', [AdminController::class, 'deletestrukturorganisasi']);
    //Anggota Struktur Organisasi
Route::get('/index/addsidestrukturorganisasi', [AdminController::class, 'addsidestrukturorganisasi']);
Route::post('/insertmemberstrukturorganisasi', [AdminController::class, 'insertmemberstrukturorganisasi']);
Route::get('/index/viewstrukturorganisasi/{id}', [AdminController::class, 'viewstrukturorganisasi']);
Route::post('/editsidestrukturorganisasi/{id}', [AdminController::class, 'editsidestrukturorganisasi']);
Route::get('/deletestruktur/{id}', [AdminController::class, 'deletestruktur']);
//sekolah adiwiyata
Route::get('/index/sekolahadiwiyata', [Admincontroller::class, 'sekolahadiwiyata']);
Route::get('/index/addsekolahadiwiyata', [Admincontroller::class, 'addsekolahadiwiyata']);
Route::post('/insertsekolahadiwiyata', [Admincontroller::class, 'insertsekolahadiwiyata']);
Route::get('/index/editsekolahadiwiyata', [Admincontroller::class, 'editsekolahadiwiyata']);
Route::post('/updateadiwiyata', [Admincontroller::class, 'updateadiwiyata']);
//Sejarah Singkat
Route::get('/index/sejarahsingkat', [Admincontroller::class, 'sejarahsingkat']);
Route::get('/index/addsejarahsingkat', [Admincontroller::class, 'addsejarahsingkat']);
Route::post('/insertsejarahsingkat', [Admincontroller::class, 'insertsejarahsingkat']);
Route::get('/sejarahsingkat/edit', [Admincontroller::class, 'editviewsejarahsingkat']);
Route::post('/updatesejarahsingkat/{id}', [Admincontroller::class, 'updatesejarahsingkat']);
Route::get('/sejarahsingkat/delete/{id}', [Admincontroller::class, 'deletesejarahsingkat']);
    //side sejarah singkat
Route::get('/index/addsidesejarahsingkat', [Admincontroller::class, 'sidesejarahsingkat']);
Route::post('/insertsidesejarah', [Admincontroller::class, 'insertsidesejarah']);
Route::post('/editsidesejarah/{idarray}', [Admincontroller::class, 'editsidesejarah']);
Route::get('/sidesejarahdelete/{idarray}', [Admincontroller::class, 'deletesidesejarah']);
//Sekolah Rujukan
Route::get('/index/sekolahrujukan', [Admincontroller::class, 'sekolahrujukan']);
Route::get('/index/editsekolahrujukan', [Admincontroller::class, 'editviewsekolahrujukan']);
Route::post('/editsekolahrujukan', [Admincontroller::class, 'editsekolahrujukan']);
Route::get('/index/resetsekolahrujukan', [Admincontroller::class, 'resetsekolahrujukan']);
// Route::get('/sejarahsingkat/edit/{id}', [Admincontroller::class, 'editviewsejarahsingkat']);
// Route::post('/updatesejarahsingkat/{id}', [Admincontroller::class, 'updatesejarahsingkat']);
// Route::get('/sejarahsingkat/delete/{id}', [Admincontroller::class, 'deletesejarahsingkat']);
// end profil sekolah-admin

//======================= Start Bkk ==================//
//visi misi
Route::get('/index/visimisibkk', [Admincontroller::class, 'visimisibkk']);
Route::get('/index/editvisimisibkk', [Admincontroller::class, 'editvisimisibkk']);
Route::post('/editupdatevisimisibkk', [Admincontroller::class, 'editupdatevisimisibkk']);
Route::get('/deletevisimisibkk', [Admincontroller::class, 'deletevisimisibkk']);

//struktur
Route::get('/index/sobkk', [Admincontroller::class, 'sobkk']);
Route::get('/index/editsobkk', [Admincontroller::class, 'editviewsobkk']);
Route::post('/editupdatesobkk', [Admincontroller::class, 'editupdatesobkk']);
Route::get('/deletesobkk/{key}', [Admincontroller::class, 'deletesobkk']);
    //sidesobkk
Route::get('/index/sidesobkk', [Admincontroller::class, 'sidesobkk']);
Route::post('/editupdatesidesobkk', [Admincontroller::class, 'editupdatesidesobkk']);
Route::post('/oneupdatesidesobkk/{key}', [Admincontroller::class, 'oneupdatesidesobkk']);

//kegiatan BKK
Route::get('/index/kegiatan-bkk', [Admincontroller::class, 'kegiatan_bkk']);
Route::get('/index/add_kegiatan', [Admincontroller::class, 'addkegiatan']);
Route::post('/insertkegiatanbkk', [Admincontroller::class, 'insertkegiatanbkk']);
Route::get('/index/editviewkegiatanbkk/{id}', [Admincontroller::class, 'viewkegiatanbkk']);
Route::post('/editkegiatanbkk/{id}', [Admincontroller::class, 'editkegiatanbkk']);
Route::get('/deletekegiatanbkk/{id}', [Admincontroller::class, 'deletekegiatanbkk']);

//bimbingan BKK
Route::get('/index/bimbingan-karir', [Admincontroller::class, 'bimbingan_bkk']);
Route::get('/index/add_bimbingan', [Admincontroller::class, 'addbimbingan']);
Route::post('/insertbimbingan', [Admincontroller::class, 'insertbimbingan']);
Route::get('/index/editviewbimbingan/{id}', [Admincontroller::class, 'viewbimbingan']);
Route::post('/editbimbingan/{id}', [Admincontroller::class, 'editbimbingan']);
Route::get('/deletebimbingan/{id}', [Admincontroller::class, 'deletebimbingan']);

//Kewirausahaan Sketsu
Route::get('/index/kewirausahaan-sketsu', [Admincontroller::class, 'kewirausahaansketsu']);
Route::get('/index/addalumnikbkk', [Admincontroller::class, 'addalumnikbkk']);
Route::post('/insertalumnibkk', [Admincontroller::class, 'insertalumnikbkk']);
Route::get('/index/addsiswakbkk', [Admincontroller::class, 'addsiswakbkk']);
Route::post('/insertsiswakbkk', [Admincontroller::class, 'insertsiswakbkk']);
Route::get('/deletepeserta/{key}', [Admincontroller::class, 'deletepeserta']);
Route::get('/deletealumni/{key}', [Admincontroller::class, 'deletealumni']);
//lowongan kerja
Route::get('/index/lowongankerja', [Admincontroller::class, 'lowongan_kerja']);
Route::get('/index/addlowongankerja', [Admincontroller::class, 'addlowongan_kerja']);
Route::post('/insertlowongankerja', [Admincontroller::class, 'insertlowongankerja']);
Route::get('/index/showlowongankerja/{id}', [Admincontroller::class, 'showlowongankerja']);
Route::post('/editlowongankerja/{id}', [Admincontroller::class, 'editlowongankerja']);
Route::get('/deletelowongan/{id}', [Admincontroller::class, 'deletelowongan']);

//perusahaan mitra
Route::get('/index/perusahaanmitra', [Admincontroller::class, 'perusahaanmitra']);
Route::get('/index/addpt', [Admincontroller::class, 'addpt']);
Route::post('/insertperusahaanmitra', [Admincontroller::class, 'insertperusahaanmitra']);
Route::get('/index/showaddpt/{id}', [Admincontroller::class, 'showaddpt']);
Route::post('/editperusahaanmitra/{id}', [Admincontroller::class, 'editperusahaanmitra']);
Route::get('/deletemitra/{id}', [Admincontroller::class, 'deletemitra']);

Route::post('/insertperusahaanmitra', [Admincontroller::class, 'insertperusahaanmitra']);
Route::get('/index/addumkm', [Admincontroller::class, 'addumkm']);
Route::post('/insertumkmpasangan', [Admincontroller::class, 'insertumkmpasangan']);
Route::get('/index/showumkm/{id}', [Admincontroller::class, 'showumkm']);
Route::post('/editshowumkm/{id}', [Admincontroller::class, 'editshowumkm']);
Route::get('/deleteumkm/{id}', [Admincontroller::class, 'deleteumkm']);
//BKK DEFINITION
Route::get('/index/bkk', [AdminController::class, 'indexbkk'])->name('bkk');
Route::post('/updatebkk/{id}', [AdminController::class, 'edit']);

//======================= End Bkk ==================//

////////////-------------ADMIN BERANDA------------/////////////////

////////////////----------BERANDA SLIDER-----------///////////////////////
Route::get('/beranda/slider', [BerandaController::class, 'slider'])->name('slider');
Route::get('/beranda/editslider/{id}', [BerandaController::class, 'editslider']);
Route::post('/beranda/updateslider/{id}', [BerandaController::class, 'updateslider']);
Route::get('/slider/deleteslider/{id}', [BerandaController::class, 'deleteslider']);



////////////----------Beranda Blog-----------////////////////////////////////
Route::get('/beranda/blog', [BerandaController::class, 'viewblog'])->name('viewblog');
Route::get('/beranda/tambahblog', [BerandaController::class, 'tambahblog']);
Route::post('/insertblog', [BerandaController::class, 'insertblog']);
Route::get('/beranda/editblog/{id}', [BerandaController::class, 'editblog']);
Route::post('/beranda/updateblog/{id}', [BerandaController::class, 'updateblog']);
Route::get('/blog/deleteblog/{id}', [BerandaController::class, 'deleteblog']);


////////////////----------SAMBUTAN KEPALA SEKOLAH-------------//////////////////////
Route::get('/beranda/keunggulan', [BerandaController::class, 'keunggulan'])->name('keunggulan');
Route::get('/beranda/editkeunggulan/{id}', [BerandaController::class, 'editkeunggulan']);
Route::post('/beranda/updatekeunggulan/{id}', [BerandaController::class, 'updatekeunggulan']);
Route::get('/keunggulan/deletekeunggulan/{id}', [BerandaController::class, 'deletekeunggulan']);



//////////////////----------------------KEUNGGULAN SKETSU-------------////////////////////
Route::get('/beranda/sambutankepsek', [BerandaController::class, 'sambutankepsek'])->name('sambutankepsek');
Route::get('/beranda/editsambutan/{id}', [BerandaController::class, 'editsambutan']);
Route::post('/beranda/updatesambutan/{id}', [BerandaController::class, 'updatesambutan']);





//////////////////------------ALUMNI BOSS----------////////////
Route::get('/beranda/alumni', [BerandaController::class, 'viewalumni'])->name('viewalumni');
Route::get('/beranda/tambahalumni', [BerandaController::class, 'tambahalumni']);
Route::post('/insertalumni', [BerandaController::class, 'insertalumni']);
Route::get('/beranda/editalumni/{id}', [BerandaController::class, 'editalumni']);
Route::post('/beranda/updatealumni/{id}', [BerandaController::class, 'updatealumni']);
Route::get('/alumni/deletealumni/{id}', [BerandaController::class, 'deletealumni']);



//////////////////////------------TOTAL SISWA----------///////////////////////
Route::get('/beranda/totalsiswa', [BerandaController::class, 'totalsiswa'])->name('totalsiswa');
Route::get('/beranda/edittotal/{id}', [BerandaController::class, 'edittotal']);
Route::post('/beranda/updatetotal/{id}', [BerandaController::class, 'updatetotal']);
Route::get('/totalsiswa/deletetotal/{id}', [BerandaController::class, 'deletetotal']);


/////////////////////-------------KERJA SAMA-SPONSOR-------------//////////////////
Route::get('/beranda/sponsor', [BerandaController::class, 'sponsor'])->name('sponsor');
Route::get('/beranda/tambahsponsor', [BerandaController::class, 'tambahsponsor']);
Route::post('/insertsponsor', [BerandaController::class, 'insertsponsor']);
Route::get('/beranda/editsponsor/{id}', [BerandaController::class, 'editsponsor']);
Route::post('/beranda/updatesponsor/{id}', [BerandaController::class, 'updatesponsor']);
Route::get('/sponsor/deletesponsor/{id}', [BerandaController::class, 'deletesponsor']);



////////////////////-------------------------VIDEOPROFILE--------------////////////////////
Route::get('/beranda/videoprofil', [BerandaController::class, 'videoprofil'])->name('videoprofil');
Route::get('/beranda/editvideo/{id}', [BerandaController::class, 'editvideo']);
Route::post('/beranda/updatevideo/{id}', [BerandaController::class, 'updatevideo']);
Route::get('/videoprofil/deletevideo/{id}', [BerandaController::class, 'deletevideo']);




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

//DATAWALAS
Route::get('/data/walas', [DataController::class, 'walas'])->name('walas');
Route::get('/data/tambahwalas', [DataController::class, 'tambahwalas']);
Route::post('/insertwalas', [DataController::class, 'insertwalas']);
Route::get('/data/editwalas/{id}', [DataController::class, 'editwalas']);
Route::post('/data/updatewalas/{id}', [DataController::class, 'updatewalas']);
Route::get('/data/deletewalas/{id}', [DataController::class, 'deletewalas']);


//Prestasi
Route::get('/data/prestasii', [DataController::class, 'prestasi'])->name('prestasi');
Route::get('/data/tambahprestasi', [DataController::class, 'tambahprestasi']);
Route::post('/insertprestasi', [DataController::class, 'insertprestasi']);
Route::get('/data/editprestasi/{id}', [DataController::class, 'editprestasi']);
Route::post('/data/updateprestasi/{id}', [DataController::class, 'updateprestasi']);
Route::get('/data/deleteprestasi/{id}', [DataController::class, 'deleteprestasi']);


//Kakomli
Route::get('/index/kakomli', [KakomliController::class, 'kakomli'])->name('kakomli');;
Route::get('/index/tambahkakomli', [KakomliController::class, 'create']);
Route::post('/insertkakomli', [KakomliController::class, 'store']);
Route::get('/kakomli/edit/{id}', [KakomliController::class, 'show']);
Route::post('/kakomli/update/{id}', [KakomliController::class, 'update']);
Route::get('/kakomli/deletekakomli/{id}', [KakomliController::class, 'destroy']);

//SosialMedia
Route::get('/index/sosmed', [SosmedController::class, 'sosmed'])->name('Sosmed');;
Route::get('/index/tambahsosmed', [SosmedController::class, 'create']);
Route::post('/insertsosmed', [SosmedController::class, 'store']);
Route::get('/sosmed/edit/{id}', [SosmedController::class, 'show']);
Route::post('/sosmed/update/{id}', [SosmedController::class, 'update']);
Route::get('/sosmed/deletesosmed/{id}', [SosmedController::class, 'destroy']);

//LSP ADMIN
Route::get('/index/lsp', [LSPController::class, 'indexlsp'])->name('indexlsp');
Route::post('/updatelsp/{id}', [LSPController::class, 'edit']);


Route::get('/index/visimisilsp', [LSPController::class, 'visimisilsp'])->name('visimisilsp');
Route::post('/updatevisimisilsp/{id}', [LSPController::class, 'editlsp']);


Route::get('/index/skemalsp', [LSPController::class, 'skemalsp'])->name('skemalsp');
Route::post('/updateskemalsp/{id}', [LSPController::class, 'updateskemalsp']);


Route::get('/index/ujikomlsp', [LSPController::class, 'ujikom'])->name('ujikom');
Route::post('/updateujikomlsp/{id}', [LSPController::class, 'updateujikom']);


Route::get('/index/jmllsp', [LSPController::class, 'jml'])->name('jml');
Route::post('/updatejmllsp/{id}', [LSPController::class, 'updatejml']);


//MODUL ADMIN
Route::get('/index/modultkr', [ModulController::class, 'modultkr'])->name('modultkr');
Route::post('/updatemodultkr/{id}', [ModulController::class, 'updatemodultkr']);


///////////////////////////////----------------Kategori Blog----------------/////////////////////////---------------------
Route::get('/kategoriblog', [DataController::class, 'kategoriblog'])->name('kategoriblog');
Route::get('/tambahkategoriblog', [DataController::class, 'tambahkategoriblog']);
Route::post('/insertkategoriblog', [DataController::class, 'insertkategoriblog']);
Route::get('/editkategoriblog/{id}', [DataController::class, 'editkategoriblog']);
Route::post('/updatekategoriblog/{id}', [DataController::class, 'updatekategoriblog']);
Route::get('/deletekategoriblog/{id}', [DataController::class, 'deletekategoriblog']);
Route::get('/index/modultei', [ModulController::class, 'modultei'])->name('modultei');
Route::post('/updatemodultei/{id}', [ModulController::class, 'updatemodultei']);

Route::get('/index/modul', [ModulController::class, 'modul'])->name('modul');;
Route::get('/index/tambahmodul', [ModulController::class, 'create']);
Route::post('/insertmodul', [ModulController::class, 'store']);
Route::get('/modul/edit/{id}', [ModulController::class, 'show']);
Route::post('/modul/update/{id}', [ModulController::class, 'update']);
Route::get('/modul/deletemodul/{id}', [ModulController::class, 'destroy']);


Route::get('/index/reparasi', [ModulController::class, 'reparasi'])->name('reparasi');;
Route::get('/index/tambahreparasi', [ModulController::class, 'createreparasi']);
Route::post('/insertreparasi', [ModulController::class, 'storereparasi']);
Route::get('/reparasi/edit/{id}', [ModulController::class, 'showreparasi']);
Route::post('/reparasi/update/{id}', [ModulController::class, 'updatereparasi']);
Route::get('/reparasi/deletereparasi/{id}', [ModulController::class, 'destroyreparasi']);



Route::get('/index/artikel', [ModulController::class, 'artikel'])->name('artikel');
Route::post('/updateartikel/{id}', [ModulController::class, 'editartikel']);


Route::get('/ptofile', [ModulController::class, 'profile'])->name('profile');
Route::get('/logout', [ModulController::class, 'logout'])->name('logout');
Route::post('/editprofile', [ModulController::class, 'editprofile'])->name('profile');



// Route::get('/tes', [ModulController::class, 'tes'])->name('tes');

// Route::get('/multipleupload', [DataController::class, 'index'])->name('uploads');
// Route::post('/save', [DataController::class, 'store']);
// Route::get('/multipleuploads', '[Data])->name('uploads');
// Route::post('/save', 'MultipleuploadsController@store')->name('uploads.store');


// Route::get('/email', [kirimemailController::class, 'index']);
