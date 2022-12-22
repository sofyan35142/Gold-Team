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
use App\Models\keunggulan;
use App\Models\kewirausahaansketsu;
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
        $alumni=alumni::all();
        $blog=Blog::latest()->limit(3)->get();
        $datakepsek=kepsek::all();
        $total=totalsiswa::all();
        $video=videoprofil::all();
        $keunggulan=keunggulan::all();
        return view("landingpage.beranda.beranda", compact('blog','alumni','datakepsek','total','slider','sponsor','video','keunggulan'));
    }

    public function create()
    {
        //
    }

    public function jurusan()
    {
        $sponsor = sponsor::all();
        $data = Jurusan::all();
        return view("landingpage.jurusan.jurusan", compact('data', 'sponsor'));
    }
    public function detailjurusan($id)
    {
        $sponsor = sponsor::all();
        $data = Jurusan::find($id);
        $kakomli = Kakomli::find($id);
        $modul = Modul::where('id',$id)->get();
        return view("landingpage.jurusan.detailjurusan", compact('data', 'kakomli', 'modul', 'sponsor'));
    }
    public function detailmodul($id)
    {
        $sponsor = sponsor::all();
        $data = Modul::find($id);

        return view("landingpage.jurusan.detailmodul", compact('data', 'sponsor'));
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
        $sponsor = sponsor::all();
        $modultkr = Modul::where('id', '=', 1)->firstOrFail();
        return view("landingpage.jurusan.modulproduktiftkr", compact('modultkr', 'sponsor'));
    }
    public function reparasibengkel()
    {
        $sponsor = sponsor::all();
        $data = Reparasibengkel::all();
        return view("landingpage.jurusan.reparasibengkel", compact('data', 'sponsor'));
    }
    public function modulproduktiftei()
    {
        $sponsor = sponsor::all();
        $modultei = Modultei::where('id', '=', 1)->firstOrFail();
        return view("landingpage.jurusan.modulproduktiftei", compact('modultei', 'sponsor'));
    }
    public function modulproduktifrpl()
    {
        $sponsor = sponsor::all();
        return view("landingpage.jurusan.modulproduktifrpl", compact('sponsor'));
    }
    public function artikelilmiah()
    {
        $sponsor = sponsor::all();
        $artikel = Artikel::where('id', '=', 1)->firstOrFail();
        return view("landingpage.jurusan.artikelilmiah", compact('artikel', 'sponsor'));
    }
    public function modulproduktiftki()
    {
        $sponsor = sponsor::all();
        return view("landingpage.jurusan.modulproduktiftki", compact('sponsor'));
    }
    public function modulproduktiftav()
    {
        $sponsor = sponsor::all();
        return view("landingpage.jurusan.modulproduktiftav", compact('sponsor'));
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
        $sponsor = sponsor::all();
        $data = LSP::where('id', '=', 1)->firstOrFail();
        return view("landingpage.lsp.lsp", compact('data', 'sponsor'));
    }
    public function visimisilsp()
    {
        $sponsor = sponsor::all();
        $visi = Visimisilsp::where('id', '=', 1)->firstOrFail();
        return view("landingpage.lsp.visimisilsp", compact('visi', 'sponsor'));
    }
    public function skematerlisensi()
    {
        $sponsor = sponsor::all();
        $skema = Skematerlisensi::where('id', '=', 1)->firstOrFail();
        return view("landingpage.lsp.skematerlisensi", compact('skema', 'sponsor'));
    }
    public function tempatujikom()
    {
        $sponsor = sponsor::all();
        $ujikom = Tempatujikom::where('id', '=', 1)->firstOrFail();

        return view("landingpage.lsp.tempatujikom", compact('ujikom', 'sponsor'));
    }
    public function jmlpemegangsertifikat()
    {
        $sponsor = sponsor::all();
        $jml = Jmlpemegang::where('id', '=', 1)->firstOrFail();
        return view("landingpage.lsp.jmlpemegangsertifikat", compact('jml', 'sponsor'));
    }

    //start profil Sekolah
    public function profil()
    {
        $sponsor = sponsor::all();
        $data = profilsekolah::all();
        return view("landingpage.profile.profil",compact('data', 'sponsor'));
    }
    public function visimisi()
    {
        $sponsor = sponsor::all();
        $data =profilvisimisi::all();
        return view("landingpage.profile.visimisi",compact('data', 'sponsor'));
    }

    public function strukturorganisasi()
    {
        $sponsor = sponsor::all();
        $data = strukturorganisasi::find(1);
        $dataside = sidestruktur::all();
        return view("landingpage.profile.strukturorganisasi",compact('data','dataside', 'sponsor'));
    }
    public function sejarahsingkat()
    {
        $sponsor = sponsor::all();
        $data = sejarahsingkat::find(1);
        $fotoside = json_decode($data->foto_side);
        return view("landingpage.profile.sejarahsingkat",compact('data','fotoside', 'sponsor'));
    }
    public function sekolahadiwiyata()
    {
        $sponsor = sponsor::all();
        $adiwiyata = sekolahadiwiyata::find(1);
        return view("landingpage.profile.sekolahadiwiyata",compact('adiwiyata', 'sponsor'));
    }
    public function sekolahrujukan()
    {
        $sponsor = sponsor::all();
        $data = sekolahrujukan::find(1);
        return view("landingpage.profile.sekolahrujukan",compact('data', 'sponsor'));
    }
    //end profil sekolah

    public function guru()
    {
        $dataa =Guru::paginate(6);
        $sponsor = sponsor::all();
        $data=Guru::all();
        return view("landingpage.beranda.guru&staf", compact('data', 'sponsor','dataa'));
    }

    public function keahlian()
    {
        $sponsor = sponsor::all();
        return view("landingpage.beranda.keahlian", compact('sponsor'));
    }
    public function lokerbkk()
    {
        $sponsor = sponsor::all();
        return view("landingpage.beranda.lokerbkk", compact('sponsor'));
    }
    public function agenda()
    {
        $sponsor = sponsor::all();
        return view("landingpage.beranda.agenda", compact('sponsor'));
    }


    //start bkk
    public function bkk()
    {
        $sponsor = sponsor::all();
        return view("landingpage.BKK.bkk", compact('sponsor'));
    }
    public function visimisi_bkk()
    {
        $sponsor = sponsor::all();
        $datavisimisibkk = visimisibkk::find(1);
        return view("landingpage.BKK.visimisi_bkk",compact('datavisimisibkk', 'sponsor'));
    }
    public function strukturorganisasi_bkk()
    {
        $sponsor = sponsor::all();
        $data = strukturbkk::find(1);
        $nama = json_decode($data->nama_member);
        $foto = json_decode($data->foto_member);
        // dd($nama);
        return view("landingpage.BKK.strukturorganisasi_bkk",compact('data','nama','foto', 'sponsor'));
    }
    public function kegiatan_bkk()
    {
        $sponsor = sponsor::all();
        $kegiatan = kegiatanbkk::all();
        $kegiatan = kegiatanbkk::paginate(6);
        return view("landingpage.BKK.kegiatan_bkk",compact('kegiatan', 'sponsor'));
    }
    public function detail_kegiatan_bkk($id)
    {
        $sponsor = sponsor::all();
        $data = kegiatanbkk::find($id);
        return view("landingpage.BKK.detail.kegiatan_bkk",compact("data", 'sponsor'));
    }
    public function kewirausahaan_bkk()
    {
        $sponsor = sponsor::all();
        $data = kewirausahaansketsu::all()->first();
        return view("landingpage.BKK.kewirausahaan_bkk", compact('sponsor', 'data'));
    }
    public function lowongan_kerja()
    {
        $sponsor = sponsor::all();
        return view("landingpage.BKK.lowongan_kerja", compact('sponsor'));
    }
    public function detail_lowongan()
    {
        $sponsor = sponsor::all();
        return view("landingpage.BKK.detail.detaillowongan", compact('sponsor'));
    }
    public function bimbingan_karir()
    {
        $sponsor = sponsor::all();
        return view("landingpage.BKK.bimbingan_karir", compact('sponsor'));
    }
    public function perusahaan_mitra()
    {
        $sponsor = sponsor::all();
        return view("landingpage.BKK.perusahaan_mitra", compact('sponsor'));
    }
    //end BKK

    //Alumni
    public function testimonialumni()
    {
        return view("landingpage.alumni.testialumni");
    }
        public function profilealumni(){
        $sponsor = sponsor::all();
        $data=alumni::all();
        return view('landingpage.alumni.profilealumni', compact('data', 'sponsor'));
    }

    //Data
        public function dharma(){
        $dataa = Dharma::paginate(6);
        $sponsor = sponsor::all();
            $data=Dharma::all();
        return view('landingpage.Data.dharmawanita', compact('data', 'sponsor', 'dataa'));
    }
    public function datawalas(){
        $dataa = walas::paginate(6);
        $sponsor = sponsor::all();
        $data=walas::all();
        return view('landingpage.Data.datawalas', compact('data', 'sponsor', 'dataa'));
    }
    public function ekstra(Request $request){
        $sponsor = sponsor::all();
        $data=ekstra::all();
        $dataa =ekstra::paginate(3);
        $keyword = $request->keyword;
        $data = ekstra::query();
        if ($request->filled('judul')) {
            $data->where('judul', 'LIKE', '%' . $request->judul . '%');
        }
        $data = $data->get();
        return view('landingpage.Data.Ekstrakulikuler', compact('data', 'sponsor','keyword','dataa'));
    }
    public function prestasi(Request $request){
        $dataa = prestasi::paginate(6);
        $sponsor = sponsor::all();
        $data=prestasi::all();
        $data = prestasi::query();
        if ($request->filled('nama_lomba')) {
            $data->where('nama_lomba', 'LIKE', '%' . $request->nama_lomba . '%');
        }
        $data = $data->get();
        return view('landingpage.Data.prestasi', compact('sponsor', 'dataa','data'));
    }
    public function detailekstra($id){
        $sponsor = sponsor::all();
        $detailekstra=ekstra::find($id);
        $foto = json_decode($detailekstra->foto_kegiatan);
        return view('landingpage.Data.detailekstra', compact('detailekstra', 'sponsor','foto'));
    }
    public function detailprestasi($id){
        $sponsor = sponsor::all();
        $detailprestasi=prestasi::find($id);
        $min = prestasi::all()->first();
        $max = prestasi::all()->last();
        $previous = prestasi::where('id', '<', $detailprestasi->id)->max('id');
        $next = prestasi::where('id', '>', $detailprestasi->id)->min('id');
        $prestasiside=prestasi::latest()->limit(3)->get();
        return view('landingpage.Data.detailprestasi', compact('detailprestasi', 'prestasiside', 'sponsor', 'next', 'previous','min','max'))->with('previous', $previous)->with('next', $next);
    }

    public function blogdetail($id){
        $sponsor = sponsor::all();
        $data=Blog::find($id);
        $min=Blog::all()->first();
        $max=Blog::all()->last();
        $previous = Blog::where('id', '<', $data->id)->max('id');
        $next = Blog::where('id', '>', $data->id)->min('id');
        $kategoriblog=kategoriblog::all();
        $blogside=Blog::latest()->limit(3)->get();
        $foto = json_decode($data->foto_kegiatan);
        // dd($blogside);
        // dd($blogside);
        // dd($min->id);
        return view('landingpage.beranda.detailagenda', compact('data', 'kategoriblog', 'blogside', 'sponsor', 'foto','previous','next','min','max'))->with('previous', $previous)->with('next', $next);
    }
    public function blogselengkapnya(Request $request){
        $sponsor = sponsor::all();
        $kategori = kategoriblog::all();
        $dataa=Blog::all();
        $dataa = Blog::paginate(6);
        $join = Blog::join('idblog', 'blogs.kategori', '=', 'idblog.id')->select('blogs.*', 'kategoriblogs.kategori');
        $keyword = $request->keyword;
        $data = Blog::query();
        if ($request->filled('judul')) {
            $data->where('judul', 'LIKE', '%' . $request->judul . '%');
        }
        if ($request->filled('kategori')) {
            $data->where('kategori', '=', $request->kategori);
        }
        $data = $data->get();
        return view('landingpage.beranda.blogselengkapnya', compact('sponsor', 'kategori', 'data', 'join' , 'keyword','dataa'));
    }
}
