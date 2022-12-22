<?php

namespace App\Http\Controllers;

use App\Models\LSP;
use App\Models\BKK;
use App\Models\Blog;
use App\Models\Bimbingankarir;
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
use App\Models\sponsor;
use App\Models\Modultei;
use App\Models\Layananortu;
use App\Models\prestasi;
use App\Models\totalsiswa;
use App\Models\Jmlpemegang;
use App\Models\videoprofil;
use App\Models\visimisibkk;
use App\Models\Visimisilsp;
use App\Models\kategoriblog;
use App\Models\kegiatanbkk;
use App\Models\kewirausahaansketsu;
use App\Models\lowongankerja;
use App\Models\perusahaan_mitra;
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
use App\Models\Sosmed;
use App\Models\umkm_pasangan;

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
        $sosmed=Sosmed::all();
        return view("landingpage.beranda.beranda", compact('data','dataa','datakepsek','total','slider','sponsor','video', 'sosmed'));
    }

    public function create()
    {
        //
    }

    public function jurusan()
    {

        $data = Jurusan::all();
        $sosmed=Sosmed::all();
        return view("landingpage.jurusan.jurusan", compact('data', 'sosmed'));
    }
    public function detailjurusan($id)
    {
        $sosmed = Sosmed::all();
        $data = Jurusan::find($id);
        $kakomli = Kakomli::find($id);
        $modul = Modul::where('id',$id)->get();
        return view("landingpage.jurusan.detailjurusan", compact('data', 'kakomli', 'modul', 'sosmed'));
    }
    public function detailmodul($id)
    {

        $data = Modul::find($id);
        $sosmed = Sosmed::all();
        return view("landingpage.jurusan.detailmodul", compact('data', 'sosmed'));
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
        $sosmed = Sosmed::all();
        return view("landingpage.jurusan.reparasibengkel", compact('data', 'sosmed'));
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
        $sosmed = Sosmed::all();
        return view("landingpage.jurusan.artikelilmiah", compact('artikel', 'sosmed'));
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
        $sosmed = Sosmed::all();
        return view("landingpage.layananortu.layananortu", compact('layor', 'data', 'datajurusan', 'sosmed'));    }
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
        $sosmed = Sosmed::all();
        $data = LSP::where('id', '=', 1)->firstOrFail();
        return view("landingpage.lsp.lsp", compact('data', 'sosmed'));
    }
    public function visimisilsp()
    {
        $sosmed = Sosmed::all();
        $visi = Visimisilsp::where('id', '=', 1)->firstOrFail();
        return view("landingpage.lsp.visimisilsp", compact('visi', 'sosmed'));
    }
    public function skematerlisensi()
    {
        $sosmed = Sosmed::all();
        $skema = Skematerlisensi::where('id', '=', 1)->firstOrFail();
        return view("landingpage.lsp.skematerlisensi", compact('skema', 'sosmed'));
    }
    public function tempatujikom()
    {
        $ujikom = Tempatujikom::where('id', '=', 1)->firstOrFail();
        $sosmed = Sosmed::all();
        return view("landingpage.lsp.tempatujikom", compact('ujikom', 'sosmed'));
    }
    public function jmlpemegangsertifikat()
    {
        $jml = Jmlpemegang::where('id', '=', 1)->firstOrFail();
        $sosmed = Sosmed::all();
        return view("landingpage.lsp.jmlpemegangsertifikat", compact('jml', 'sosmed'));
    }

    //start profil Sekolah
    public function profil()
    {
        $data = profilsekolah::all();
        $sosmed = Sosmed::all();
        return view("landingpage.profile.profil",compact('data', 'sosmed'));
    }
    public function visimisi()
    {
        $sosmed = Sosmed::all();
        $data =profilvisimisi::all();
        return view("landingpage.profile.visimisi",compact('data', 'sosmed'));
    }

    public function strukturorganisasi()
    {
        $data = strukturorganisasi::find(1);
        $dataside = sidestruktur::all();
        $sosmed = Sosmed::all();
        return view("landingpage.profile.strukturorganisasi",compact('data','dataside', 'sosmed'));
    }
    public function sejarahsingkat()
    {
        $data = sejarahsingkat::all()->first();
        $fotoside = json_decode($data->foto_side);
        $sosmed = Sosmed::all();
        return view("landingpage.profile.sejarahsingkat",compact('data','fotoside', 'sosmed'));
    }
    public function sekolahadiwiyata()
    {
        $adiwiyata = sekolahadiwiyata::find(1);
        $sosmed = Sosmed::all();
        return view("landingpage.profile.sekolahadiwiyata",compact('adiwiyata', 'sosmed'));
    }
    public function sekolahrujukan()
    {
        $data = sekolahrujukan::find(1);
        $sosmed = Sosmed::all();
        return view("landingpage.profile.sekolahrujukan",compact('data', 'sosmed'));
    }
    //end profil sekolah

    public function guru()
    {
        $data=Guru::all();
        $sosmed = Sosmed::all();
        return view("landingpage.beranda.guru&staf", compact('data', 'sosmed'));
    }

    public function keahlian()
    {
        $sosmed = Sosmed::all();
        return view("landingpage.beranda.keahlian", compact('sosmed'));
    }
    public function lokerbkk()
    {
        $sosmed = Sosmed::all();
        return view("landingpage.beranda.lokerbkk", compact('data'));
    }
    public function agenda()
    {
        $sosmed = Sosmed::all();
        return view("landingpage.beranda.agenda", compact('data'));
    }


    //start bkk
    public function bkk()
    {
        $data = BKK::where('id', '=', 1)->firstOrFail();
        $sosmed = Sosmed::all();
        return view("landingpage.BKK.bkk", compact('data', 'sosmed'));
    }
    public function visimisi_bkk()
    {
        $datavisimisibkk = visimisibkk::find(1);
        $sosmed = Sosmed::all();
        return view("landingpage.BKK.visimisi_bkk",compact('datavisimisibkk', 'sosmed'));
    }
    public function strukturorganisasi_bkk()
    {
        $data = strukturbkk::find(1);
        $sosmed = Sosmed::all();
        $nama = json_decode($data->nama_member);
        $foto = json_decode($data->foto_member);
        // dd($nama);
        return view("landingpage.BKK.strukturorganisasi_bkk",compact('data','nama','foto', 'sosmed'));
    }
    public function kegiatan_bkk()
    {
        // $kegiatan = kegiatanbkk::all();
        $sosmed = Sosmed::all();
        $kegiatan = kegiatanbkk::paginate(6);
        return view("landingpage.BKK.kegiatan_bkk",compact('kegiatan', 'sosmed'));
    }
    public function detail_kegiatan_bkk($id)
    {
        $data = kegiatanbkk::find($id);
        $sosmed = Sosmed::all();
        return view("landingpage.BKK.detail.kegiatan_bkk",compact("data", "sosmed"));
    }
    public function kewirausahaan_bkk()
    {
        $sosmed = Sosmed::all();
        $data = kewirausahaansketsu::all()->first();
        $p = json_decode($data->wirausahapesertadidik);
        // dd($p);
        return view("landingpage.BKK.kewirausahaan_bkk",compact("data",'sosmed'));
    }
    public function lowongan_kerja()
    {
        // $data = lowongankerja::paginate(6)->sortByDesc("id");
        $data = lowongankerja::paginate(6);
        $sosmed = Sosmed::all();
        return view("landingpage.BKK.lowongan_kerja",compact("data","sosmed"));
    }
    public function detail_lowongan($id)
    {
        $sosmed = Sosmed::all();
        $data =  lowongankerja::find($id);
        $lowongan = lowongankerja::latest("id")->limit(10)->get();
        return view("landingpage.BKK.detail.detaillowongan", compact('sosmed','data','lowongan'));
    }
    public function bimbingan_karir()
    {
        $data = Bimbingankarir::all();
        $sosmed = Sosmed::all();
        return view("landingpage.BKK.bimbingan_karir", compact('sosmed', 'data'));
    }
    public function perusahaan_mitra()
    {
        $sosmed = Sosmed::all();
        $data = perusahaan_mitra::paginate(3);
        $data2 = umkm_pasangan::paginate(3);
        return view("landingpage.BKK.perusahaan_mitra", compact('sosmed','data','data2'));
    }
    //end BKK

    //Alumni
    public function testimonialumni()
    {
        $sosmed = Sosmed::all();
        return view("landingpage.alumni.testialumni", compact('sosmed'));
    }
    public function profilealumni()
    {
        $sosmed = Sosmed::all();
        return view('landingpage.alumni.profilealumni', compact('sosmed'));
    }

    //Data
        public function dharma(){
            $data=Dharma::all();
        $sosmed = Sosmed::all();
        return view('landingpage.Data.dharmawanita', compact('data', 'sosmed') );
    }
    public function datawalas(){
        $data=walas::all();
        $sosmed = Sosmed::all();
        return view('landingpage.Data.datawalas', compact('data', 'sosmed'));
    }
    public function ekstra(){
        $data=ekstra::all();
        $sosmed = Sosmed::all();
        return view('landingpage.Data.Ekstrakulikuler', compact('data', 'sosmed'));
    }
    public function prestasi(){
        $prestasi=prestasi::all();
        $sosmed = Sosmed::all();
        return view('landingpage.Data.prestasi', compact('prestasi', 'sosmed'));
    }
    public function detailekstra($id){
        $detailekstra=ekstra::where('id',$id)->get();
        $sosmed = Sosmed::all();
        return view('landingpage.Data.detailekstra', compact('detailekstra', 'sosmed'));
    }
    public function detailprestasi($id){
        $detailprestasi=prestasi::where('id',$id)->get();
        $prestasiside=prestasi::latest()->get();
        $sosmed = Sosmed::all();
        return view('landingpage.Data.detailprestasi', compact('detailprestasi', 'prestasiside', 'sosmed'));
    }

    public function blogdetail($id){
        $data=Blog::where('id',$id)->get();
        $kategoriblog=kategoriblog::all();
        $blogside=Blog::latest()->get();
        $sosmed = Sosmed::all();
        // dd($blogside);
        // dd($blogside);
        return view('landingpage.beranda.detailagenda', compact('data', 'kategoriblog', 'blogside', 'sosmed'));
    }

    public function blogbanyak(){
        $sosmed = Sosmed::all();
        return view ('landingpage.beranda.bloglebihbanyak', compact('sosmed'));
    }


}
