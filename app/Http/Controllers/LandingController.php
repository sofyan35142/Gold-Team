<?php

namespace App\Http\Controllers;

use App\Models\LSP;
use App\Models\Blog;
use App\Models\Guru;
use App\Models\Modul;
use App\Models\walas;
use App\Models\alumni;
use App\Models\Dharma;
use App\Models\ekstra;
use App\Models\kepsek;
use App\Models\slider;
use App\Models\Artikel;
use App\Models\Jurusan;
use App\Models\Kakomli;
<<<<<<< HEAD
use App\Models\sponsor;
use App\Models\Modultei;
=======
use App\Models\kategoriblog;
use App\Models\Layananortu;
>>>>>>> 2ea2caffb65585acbb4e9132d4cb23ef2e1dfd3a
use App\Models\prestasi;
use App\Models\totalsiswa;
use App\Models\Jmlpemegang;
use App\Models\videoprofil;
use App\Models\visimisibkk;
use App\Models\Visimisilsp;
use App\Models\kategoriblog;
use App\Models\kegiatanbkk;
use App\Models\sidestruktur;
use App\Models\Tempatujikom;
use Illuminate\Http\Request;
use App\Models\profilsekolah;
use App\Models\profilvisimisi;
use App\Models\sejarahsingkat;
use App\Models\sekolahrujukan;
use App\Models\Reparasibengkel;
use App\Models\Skematerlisensi;
use App\Models\sekolahadiwiyata;
use App\Models\strukturbkk;
use App\Models\strukturorganisasi;

class LandingController extends Controller
{
    public function beranda()
    {
        $sponsor=sponsor::all();
        $slider=slider::all();
        $dataa=alumni::all();
        $data=Blog::all();
        $datakepsek=kepsek::all();
        $total=totalsiswa::all();
        $video=videoprofil::all();
        return view("landingpage.beranda.beranda", compact('data','dataa','datakepsek','total','slider','sponsor','video'));
    }

    public function create()
    {
        //
    }

    public function jurusan()
    {
        $data = Jurusan::all();
        return view("landingpage.jurusan.jurusan", compact('data'));
    }
    public function detailjurusan($id)
    {

        $data = Jurusan::find($id);
        $kakomli = Kakomli::find($id);
        $modul = Modul::where('id',$id)->get();
        return view("landingpage.jurusan.detailjurusan", compact('data', 'kakomli', 'modul'));
    }
    public function detailmodul($id)
    {

        $data = Modul::find($id);

        return view("landingpage.jurusan.detailmodul", compact('data'));
    }
    public function tkr()
    {
        return view("landingpage.jurusan.tkr");
    }
    public function tei()
    {
        return view("landingpage.jurusan.tei");
    }
    public function rpl()
    {
        return view("landingpage.jurusan.rpl");
    }
    public function tki()
    {
        return view("landingpage.jurusan.tki");
    }
    public function tav()
    {
        return view("landingpage.jurusan.tav");
    }
    public function modulproduktiftkr()
    {
        $modultkr = Modul::where('id', '=', 1)->firstOrFail();
        return view("landingpage.jurusan.modulproduktiftkr", compact('modultkr'));
    }
    public function reparasibengkel()
    {
        $data = Reparasibengkel::all();
        return view("landingpage.jurusan.reparasibengkel", compact('data'));
    }
    public function modulproduktiftei()
    {
        $modultei = Modultei::where('id', '=', 1)->firstOrFail();
        return view("landingpage.jurusan.modulproduktiftei", compact('modultei'));
    }
    public function modulproduktifrpl()
    {
        return view("landingpage.jurusan.modulproduktifrpl");
    }
    public function artikelilmiah()
    {
        $artikel = Artikel::where('id', '=', 1)->firstOrFail();
        return view("landingpage.jurusan.artikelilmiah", compact('artikel'));
    }
    public function modulproduktiftki()
    {
        return view("landingpage.jurusan.modulproduktiftki");
    }
    public function modulproduktiftav()
    {
        return view("landingpage.jurusan.modulproduktiftav");
    }

    //layanan ortu
    public function layananortu()
    {
        $layor = Layananortu::with('jurusan');
        $data = Layananortu::all();
        $datajurusan = Jurusan::all();
        
        return view("landingpage.layananortu.layananortu", compact('layor', 'data', 'datajurusan'));
    }
    public function storelayor(Request $request)
    {
        $this->validate($request, [
            'id_jurusan' => 'required|not_in:0',
            
        ]);
        $data = Layananortu::create($request->all());
        // dd($data);
        
        return redirect()->route('layananortu')->with('info', 'Saran anda berhasil dikirim!.');
    }
    //end layanan rotu

    ////LSP////
    public function lsp()
    {
        $data = LSP::where('id', '=', 1)->firstOrFail();
        return view("landingpage.lsp.lsp", compact('data'));
    }
    public function visimisilsp()
    {
        $visi = Visimisilsp::where('id', '=', 1)->firstOrFail();
        return view("landingpage.lsp.visimisilsp", compact('visi'));
    }
    public function skematerlisensi()
    {
        $skema = Skematerlisensi::where('id', '=', 1)->firstOrFail();
        return view("landingpage.lsp.skematerlisensi", compact('skema'));
    }
    public function tempatujikom()
    {
        $ujikom = Tempatujikom::where('id', '=', 1)->firstOrFail();

        return view("landingpage.lsp.tempatujikom", compact('ujikom'));
    }
    public function jmlpemegangsertifikat()
    {
        $jml = Jmlpemegang::where('id', '=', 1)->firstOrFail();
        return view("landingpage.lsp.jmlpemegangsertifikat", compact('jml'));
    }

    //start profil Sekolah
    public function profil()
    {
        $data = profilsekolah::all();
        return view("landingpage.profile.profil",compact('data'));
    }
    public function visimisi()
    {
        $data =profilvisimisi::all();
        return view("landingpage.profile.visimisi",compact('data'));
    }

    public function strukturorganisasi()
    {
        $data = strukturorganisasi::find(1);
        $dataside = sidestruktur::all();
        return view("landingpage.profile.strukturorganisasi",compact('data','dataside'));
    }
    public function sejarahsingkat()
    {
        $data = sejarahsingkat::find(1);
        $fotoside = json_decode($data->foto_side);
        return view("landingpage.profile.sejarahsingkat",compact('data','fotoside'));
    }
    public function sekolahadiwiyata()
    {
        $adiwiyata = sekolahadiwiyata::find(1);
        return view("landingpage.profile.sekolahadiwiyata",compact('adiwiyata'));
    }
    public function sekolahrujukan()
    {
        $data = sekolahrujukan::find(1);
        return view("landingpage.profile.sekolahrujukan",compact('data'));
    }
    //end profil sekolah

    public function guru()
    {
        $data=Guru::all();
        return view("landingpage.beranda.guru&staf", compact('data'));
    }

    public function keahlian()
    {
        return view("landingpage.beranda.keahlian");
    }
    public function lokerbkk()
    {
        return view("landingpage.beranda.lokerbkk");
    }
    public function agenda()
    {
        return view("landingpage.beranda.agenda");
    }


    //start bkk
    public function bkk()
    {
        return view("landingpage.BKK.bkk");
    }
    public function visimisi_bkk()
    {
        $datavisimisibkk = visimisibkk::find(1);
        return view("landingpage.BKK.visimisi_bkk",compact('datavisimisibkk'));
    }
    public function strukturorganisasi_bkk()
    {
        $data = strukturbkk::find(1);
        $nama = explode('+',$data->nama_member);
        $foto = explode(',',$data->foto_member);
        // dd($nama);
        return view("landingpage.BKK.strukturorganisasi_bkk",compact('data','nama','foto'));
    }
    public function kegiatan_bkk()
    {
        $kegiatan = kegiatanbkk::all();
        return view("landingpage.BKK.kegiatan_bkk",compact('kegiatan'));
    }
    public function detail_kegiatan_bkk($id)
    {
        $data = kegiatanbkk::find($id);
        return view("landingpage.BKK.detail.kegiatan_bkk",compact("data"));
    }
    public function kewirausahaan_bkk()
    {
        return view("landingpage.BKK.kewirausahaan_bkk");
    }
    public function lowongan_kerja()
    {
        return view("landingpage.BKK.lowongan_kerja");
    }
    public function detail_lowongan()
    {
        return view("landingpage.BKK.detail.detaillowongan");
    }
    public function bimbingan_karir()
    {
        return view("landingpage.BKK.bimbingan_karir");
    }
    public function perusahaan_mitra()
    {
        return view("landingpage.BKK.perusahaan_mitra");
    }
    //end BKK

    //Alumni
    public function testimonialumni()
    {
        return view("landingpage.alumni.testialumni");
    }
        public function profilealumni(){
        return view('landingpage.alumni.profilealumni');
    }

    //Data
        public function dharma(){
            $data=Dharma::all();
        return view('landingpage.Data.dharmawanita', compact('data') );
    }
    public function datawalas(){
        $data=walas::all();
        return view('landingpage.Data.datawalas', compact('data'));
    }
    public function ekstra(){
        $data=ekstra::all();
        return view('landingpage.Data.Ekstrakulikuler', compact('data'));
    }
    public function prestasi(){
        $prestasi=prestasi::all();
        return view('landingpage.Data.prestasi', compact('prestasi'));
    }
    public function detailekstra($id){
        $detailekstra=ekstra::where('id',$id)->get();
        return view('landingpage.Data.detailekstra', compact('detailekstra'));
    }
    public function detailprestasi($id){
        $detailprestasi=prestasi::where('id',$id)->get();
        $prestasiside=prestasi::latest()->get();
        return view('landingpage.Data.detailprestasi', compact('detailprestasi', 'prestasiside'));
    }

    public function blogdetail($id){
        $data=Blog::where('id',$id)->get();
        $kategoriblog=kategoriblog::all();
        $blogside=Blog::latest()->get();
        // dd($blogside);
        // dd($blogside);
        return view('landingpage.beranda.detailagenda', compact('data', 'kategoriblog', 'blogside'));
    }

    public function blogbanyak(){
        return view ('landingpage.beranda.bloglebihbanyak');
    }
}
