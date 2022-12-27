<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Dharma;
use App\Models\ekstra;
use App\Models\Guru;
use App\Models\Jurusan;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\BKK;
use App\Models\kegiatanbkk;
use App\Models\kewirausahaansketsu;
use App\Models\lowongankerja;
use App\Models\strukturbkk;
use App\Models\visimisibkk;
use App\Models\sidestruktur;
use Illuminate\Http\Request;
use App\Models\profilsekolah;
use App\Models\profilvisimisi;
use App\Models\sejarahsingkat;
use App\Models\sekolahadiwiyata;
use App\Models\strukturorganisasi;
use Illuminate\Support\Facades\Auth;
use App\Models\sekolahrujukan;
use App\Models\sponsor;
use App\Models\walas;

use App\Models\Bimbingankarir;
use App\Models\perusahaan_mitra;
use App\Models\umkm_pasangan;
use Illuminate\Support\Carbon;

class Admincontroller extends Controller
{


    public function postlogin(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi'
        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/index');
        }
        return redirect('/login')->with('salah', 'Email Atau Password Salah');
    }
    public function login(Request $request)
    {
        return view('Admin.login.login');
    }

    public function gantipass(){
        return view('Admin.profile.gantipass');
    }

    public function index()
    {
        $jurusan = Jurusan::count();
        $guru = Guru::count();
        $walas = walas::count();
        $dharma = Dharma::count();
        $ekstra = ekstra::count();
        $sponsor = sponsor::count();
        $blog = Blog::count();
        $ekstra = ekstra::count();
        $bkk = kegiatanbkk::count();
        return view('Admin.index', compact('jurusan','bkk', 'guru', 'walas', 'dharma', 'ekstra','sponsor','blog','ekstra'));
    }
    ///////////////////// START PROFIL LANDINGPAGE ADMIN ///////////////////////////
    //start profileditsekolahrujukan
    public function profil()
    {
        $profil = profilsekolah::all()->first();

        return view('admin.profil.profil.profil', compact('profil'));
    }
    public function addprofil(Request $request, $profil)
    {
        // dd($request->$profil);
        $data = profilsekolah::find(1);
        $data->update(([$profil => $request->$profil]));
        if ($request->hasFile('foto_sekolah')) {
            $request->file('foto_sekolah')->move('assets/img/fotoprofilsekolah/', $request->file('foto_sekolah')->getClientOriginalName());
            $data->foto_sekolah = $request->file('foto_sekolah')->getClientOriginalName();
            $data->save();
        }
        // $profil->update(([$id => '-']));
        return redirect('/index/profil')->with("success", "Data berhasil diubah");
    }
    public function insertprofil(Request $request)
    {
        $dataprofilsekolah = profilsekolah::all();
        if (is_null($dataprofilsekolah)) {
            $data = profilsekolah::create($request->all());
            if ($request->hasFile('foto_sekolah')) {
                $request->file('foto_sekolah')->move('assets/img/fotoprofilsekolah/', $request->file('foto_sekolah')->getClientOriginalName());
                $data->foto_sekolah = $request->file('foto_sekolah')->getClientOriginalName();
                $data->save();
            }
        } else {
            return redirect('/index/addprofil/');
        }
        // dd($data);
        return redirect('/index/profil')->with('success', 'Data Berhasil Ditambahkan');
    }
    public function deleteprofil($id)
    {
        $profil = profilsekolah::find(1);
        $profil->update(([$id => '-']));
        return redirect("/index/profil")->with('success', 'Data Berhasil dihapus');
    }
    //end profil
    // start profilvisimisi-admin
    public function profilvisimisi()
    {
        $data = profilvisimisi::all()->last();
        // $data
        return view('admin.profil.visimisi.visimisi', compact('data'));
    }
    public function addprofilvisimisi()
    {
        return view('admin.profil.visimisi.addvisimisi');
    }
    public function insertprofilvisimisi(Request $request)
    {
        // dd($request->all());
        $data = profilvisimisi::create($request->all());
        if ($request->hasFile('foto_side')) {
            $request->file('foto_side')->move('assets/img/visimisi/', $request->file('foto_side')->getClientOriginalName());
            $data->foto_side = $request->file('foto_side')->getClientOriginalName();
            $data->save();
        }
        // dd($data);
        return redirect('/index/profil')->with('success', 'Data Berhasil Ditambahkan');
    }
    public function editviewvisimisi($id)
    {
        $data = profilvisimisi::find($id);
        return view('Admin.profil.visimisi.editvisimisi', compact('data'));
    }
    public function editvisimisi(Request $request, $id)
    {
        // dd($request->all());
        $data = profilvisimisi::find($id);
        $data->update([
            'visimisi' => $request->visimisi,
            //'foto' => $request->foto,
            'descvisimisiprofil' => $request->descvisimisiprofil,
        ]);
        if ($request->hasFile('foto_side')) {
            $request->file('foto_side')->move('assets/img/visimisi/', $request->file('foto_side')->getClientOriginalName());
            $data->foto_side = $request->file('foto_side')->getClientOriginalName();
            $data->save();
        }
        return redirect('/index/profilvisimisi')->with('success', 'Data Berhasil Di edit');
    }
    public function deletevisimisi($id)
    {
        $data = profilvisimisi::find($id);
        $data->delete();
        return redirect('/index/profil')->with('success', 'Berhasil Di Hapus');
    }
    // end profilvisimisisekolah-admin

    // start profil/strukturorganisasi
    public function strukturorganisasi()
    {
        $struktur = strukturorganisasi::all()->first();
        $datafotonama = sidestruktur::all();
        return view('admin.profil.strukturorganisasi.strukturorganisasi', compact('struktur', 'datafotonama'));
    }
    public function addstrukturorganisasi()
    {
        return view('admin.profil.strukturorganisasi.addstrukturorganisasi');
    }

    public function insertstrukturorganisasi(Request $request)
    {
        $data = strukturorganisasi::create([
            'judul' => $request->judul,
            'tahun_ajaran' => $request->tahun_ajaran,
            'foto_adiwiyata' => $request->foto_adiwiyata,
            'foto_sidestruktur' => $request->foto_sidestruktur,
        ]);
        // dd($data);
        if ($request->hasFile('foto_adiwiyata')) {
            $request->file('foto_adiwiyata')->move('struktur/', $request->file('foto_adiwiyata')->getClientOriginalName());
            $data->foto_adiwiyata = $request->file('foto_adiwiyata')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('foto_sidestruktur')) {
            $request->file('foto_sidestruktur')->move('sidestruktur/', $request->file('foto_sidestruktur')->getClientOriginalName());
            $data->foto_sidestruktur = $request->file('foto_sidestruktur')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('strukturorganisasi')->with('success', 'Berhasil Di Tambahkan');
    }

    public function editstrukturorganisasi($id)
    {
        $data = strukturorganisasi::findorfail($id);
        return view('admin.profil.strukturorganisasi.editstrukturorganisasi', compact('data'));
    }
    public function updatestrukturorganisasi(Request $request, $id)
    {
        // dd($request->all());
        $data = strukturorganisasi::find($id);
        $data->update([
            'judul' => $request->judul,
            'tahun_ajaran' => $request->tahun_ajaran
            // 'foto_adiwiyata' => $request->foto_adiwiyata,
            // 'foto_sidestruktur' => $request->foto_sidestruktur,
        ]);
        // dd($data);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('assets/img/', $request->file('foto')->getClientOriginalName());
            $data->foto_struktur = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

    return redirect('/index/strukturorganisasi')->with('success', 'Berhasil Di Edit');
    }

    public function deletestrukturorganisasi($id)
    {
        $data = strukturorganisasi::find($id);
        $data->judul = "-";
        $data->tahun_ajaran = "-";
        $data->foto_struktur = "-";
        return redirect()->route('strukturorganisasi')->with('success', 'Berhasil Di Hapus');
    }
    public function sidestrukturorganisasi()
    {
        $struktur = strukturorganisasi::find(1);
        return view('Admin.profil.strukturorganisasi.addeditsidestruktur', compact('datanama', 'datafoto'));
    }
    //sub side struktur organisasi
    public function addsidestrukturorganisasi()
    {
        return view("Admin.profil.strukturorganisasi.sidestruktur.addmember");
    }
    public function insertmemberstrukturorganisasi(Request $request)
    {
        $data = sidestruktur::create($request->all());
        if ($request->hasFile('foto_struktur')) {
            $request->file('foto_struktur')->move('assets/img/so/', $request->file('foto_struktur')->getClientOriginalName());
            $data->foto_struktur = $request->file('foto_struktur')->getClientOriginalName();
            $data->save();
        }
        return redirect("/index/strukturorganisasi")->with("success","Data Berhasil Update");
    }
    public function viewstrukturorganisasi($id){
        $data = sidestruktur::findorfail($id);
        return view("Admin.profil.strukturorganisasi.sidestruktur.editmember",compact("data"));
    }
    public function editsidestrukturorganisasi(request $request,$id){
        $data = sidestruktur::findorfail($id);
        $data->update([
            "nama" => $request->nama,
            // "foto_struktur" => $request->foto_struktur,
        ]);
        if ($request->hasFile('foto_struktur')) {
            $request->file('foto_struktur')->move('assets/img/so/', $request->file('foto_struktur')->getClientOriginalName());
            $data->foto_struktur = $request->file('foto_struktur')->getClientOriginalName();
            $data->save();
        }
        return redirect("/index/strukturorganisasi")->with("success","Data Berhasil Update");
    }
    public function deletestruktur($id){
        $data =  sidestruktur::find($id);
        $data->delete();
        return redirect("/index/strukturorganisasi")->with("success","Data berhasil Dihapus");
    }
    // end profil/strukturorganisasi
    // start profil/sekolahadiwiyata
    public function sekolahadiwiyata()
    {
        $data = sekolahadiwiyata::all();
        return view('Admin.profil.sekolah_adiwiyata.sekolahadiwiyata', compact('data'));
    }
    public function addsekolahadiwiyata()
    {
        return view('Admin.profil.sekolah_adiwiyata.addsekolahadiwiyata');
    }
    public function insertsekolahadiwiyata(Request $request)
    {
        // dd($request->all());
        $data = sekolahadiwiyata::create($request->all());
        if ($request->hasFile('foto_adiwiyata')) {
            $request->file('foto_adiwiyata')->move('assets/img/', $request->file('foto_adiwiyata')->getClientOriginalName());
            $data->foto_adiwiyata = $request->file('foto_adiwiyata')->getClientOriginalName();
            $data->save();
        }
        return redirect('/index/sekolahadiwiyata')->with('success', 'data berhasil ditambahkan');
    }
    public function editsekolahadiwiyata()
    {
        $data = sekolahadiwiyata::all()->first();
    return view('Admin.profil.sekolah_adiwiyata.editsekolahadiwiyata',compact("data"));
    }
    public function updateadiwiyata(request $request){
        $data = sekolahadiwiyata::all()->first();
        $data->update([
            "judul" => $request->judul,
            // "foto_adiwiyata" => $request->foto_adiwiyata,
            "deskripsi" => $request->deskripsi
        ]);
        if ($request->hasFile('foto_adiwiyata')) {
            $request->file('foto_adiwiyata')->move('assets/img/', $request->file('foto_adiwiyata')->getClientOriginalName());
            $data->foto_adiwiyata = $request->file('foto_adiwiyata')->getClientOriginalName();
            $data->save();
        }

        return redirect('/index/sekolahadiwiyata')->with('success', 'data berhasil ditambahkan');

    }
    // end profil/sekolahadiwiyata
    // Start profil/sejarahsingkat
    public function sejarahsingkat()
    {
        $sejarah = sejarahsingkat::all()->first();

        return view('Admin.profil.sejarahsingkat.sejarahsingkat', compact('sejarah'));
    }
    public function addsejarahsingkat()
    {
        return view('Admin.profil.sejarahsingkat.addsejarahsingkat');
    }
    public function insertsejarahsingkat(Request $request)
    {
        dd($request->all());
        $files = [];
        if ($request->hasfile('foto_side')) {
            foreach ($request->foto_side as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('file'), $name);
                $files[] = $name;
            }
        }
        $file  = new sejarahsingkat();
        $file->judul = $request->judul;
        $file->isi_artikel = $request->isi_artikel;
        $file->judul_fotoside = $request->judul_fotoside;
        $file->foto_side = json_encode($files);
        $file->save();
        return redirect('/index/sejarahsingkat')->with('success', 'Berhasil Di Tambahkan');
    }
    public function editviewsejarahsingkat()
    {
        // $id = 1;
        $data = sejarahsingkat::all()->first();
        return view('Admin.profil.sejarahsingkat.editsejarahsingkat', compact('data'));
    }
    public function updatesejarahsingkat(Request $request, $id)
    {
        $files = [];
        if ($request->hasfile('foto_side')) {
            foreach ($request->foto_side as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('assets/img/side sejarah/'), $name);
                $files[] = $name;
            }
        }
        $file  = sejarahsingkat::find(1);
        $file->judul = $request->judul;
        $file->isi_artikel = $request->isi_artikel;
        $file->judul_fotoside = $request->judul_fotoside;
        $file->foto_side = json_encode($files);
        $file->save();
        // dd($file);
        return redirect('/index/sejarahsingkat')->with('success', 'Berhasil Di Edit');
    }

    public function deletesejarahsingkat($id)
    {
        $data = sejarahsingkat::find($id);
        $data->delete();
        return redirect()->route('sejarahsingkat')->with('success', 'Berhasil Di Hapus');
    }
    //side sejarah
    public function sidesejarahsingkat()
    {
        return view('Admin.profil.sejarahsingkat.addsidesejarahsingkat');
    }
    public function insertsidesejarah(Request $request)
    {
        $files = [];
        if ($request->hasfile('foto_side')) {
            foreach ($request->foto_side as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('assets/img/side sejarah/'), $name);
                $files[] = $name;
            }
        }
        $model = sejarahsingkat::all()->first();
        $foto = json_decode($model->foto_side);
        // dd($foto);
        if($foto != null){
            $fotoup = array_merge($foto, $files);
            $model->foto_side = json_encode($fotoup);
        }else{
            $model->foto_side = $files;
        }
        // dd($model->foto_side);
        $model->save();
        // dd($model);
        return redirect('/index/sejarahsingkat')->with("success", "data foto side berhasil ditambahkan");
    }
    public function editsidesejarah(Request $request, $idarray)
    {
        $data = sejarahsingkat::find(1);
        if ($request->hasFile('foto_side')) {
            $fotoin = json_decode($data->foto_side);
            $request->file('foto_side')->move('assets/img/side sejarah/', $request->file('foto_side')->getClientOriginalName());
            $fotoup = $request->file('foto_side')->getClientOriginalName();
            $fotoin[$idarray] = $fotoup;
            $data->foto_side = json_encode($fotoin);
            $data->save();
        }
        // dd($data);
        return redirect('/index/sejarahsingkat')->with("success", "data berhasil diedit");
    }
    public function deletesidesejarah($idarray){
        // dd($idarray);
        $data = sejarahsingkat::all()->first();
        $foto = json_decode($data->foto_side);
        // dd($foto);
        unset($foto[$idarray]);
        $data->foto_side = $foto;
        $data->save();
        // dd($foto);
        return redirect("/index/sejarahsingkat")->with("success","Data berhasil Dihapus");
    }
    //end sejarah singkat
    //start sekolah rujukan
    public function sekolahrujukan()
    {
        $data = sekolahrujukan::find(1);
        return view("admin.profil.sekolah_rujukan.sekolahrujukan", compact('data'));
    }
    public function editviewsekolahrujukan()
    {
        $data = sekolahrujukan::all()->first();
        return view("admin.profil.sekolah_rujukan.editsekolahrujukan", compact('data'));
    }
    public function editsekolahrujukan(Request $request)
    {
        // dd($request->all());
        $data = sekolahrujukan::find(1);
        $data->update([
            'isiartikel' => $request->isiartikel,
        ]);
        if ($request->hasFile('foto_head')) {
            $request->file('foto_head')->move('assets/img/', $request->file('foto_head')->getClientOriginalName());
            $data->foto_head = $request->file('foto_head')->getClientOriginalName();
            $data->save();
        }
        return redirect("/index/sekolahrujukan")->with('success', 'data berhasil diubah');
    }
    public function resetsekolahrujukan()
    {
        // dd($request->all());
        $data = sekolahrujukan::find(1);
        $data->update([
            'foto_head' => '-',
            'isiartikel' => '-',
        ]);
        return redirect("/index/sekolahrujukan")->with('success', 'data berhasil direset');
    }
    //end sekolah rujukan
    ///////////////////// END PROFIL LANDINGPAGE ADMIN ///////////////////////////

    ///////////////////// START BKK LANDINGPAGE ADMIN ///////////////////////////
    //start visi misi
    public function visimisibkk()
    {
        $data = visimisibkk::all()->first();
        return view("Admin.bkk.visimisibkk.visimisibkk", compact("data"));
    }
    public function editvisimisibkk()
    {
        $data = visimisibkk::find(1);
        return view("Admin.bkk.visimisibkk.editvisimisi", compact("data"));
    }
    public function editupdatevisimisibkk(Request $request)
    {
        $data = visimisibkk::all()->first();
        // dd($request->all());
        $data->update([
            'visi' => $request->visi,
            'misi' => $request->misi,
            // 'isiartikel'=>$request->isiartikel,
        ]);
        if ($request->hasFile('ruanganbkk')) {
            $request->file('ruanganbkk')->move('assets/img/', $request->file('ruanganbkk')->getClientOriginalName());
            $data->ruanganbkk = $request->file('ruanganbkk')->getClientOriginalName();
            $data->save();
        }
        return redirect("/index/visimisibkk")->with("success", "Visi Misi Berhasil Di Edit");
    }
    public function deletevisimisibkk()
    {
        $data = visimisibkk::find(1);
        $data->update([
            "visi" => "-",
            "misi" => "-",
            "ruanganbkk" => "-",
        ]);
        return redirect("/index/visimisibkk")->with("success", "Visi Misi Berhasil Di Reset");
    }
    //end visi misi
    //start sobkk
    public function sobkk()
    {
        $data = strukturbkk::all()->first();
        // dd($
        $foto = json_decode($data->foto_member);
        $nama = json_decode($data->nama_member);
        // dd($foto);
        return view("Admin.bkk.strukturbkk.strukturbkk", compact("data", "foto", "nama"));
    }
    public function editviewsobkk()
    {
        // $tes = ["1","2","3"];
        // $tes2 = array_keys($tes);
        // dd($tes2);
        $data = strukturbkk::find(1);
        $foto = explode(',', $data->foto_member);
        $nama = explode('+', $data->nama_member);
        return view("Admin.bkk.strukturbkk.viewsobkk", compact("data", "foto", "nama"));
    }
    public function editupdatesobkk(Request $request)
    {
        // dd($request->all());
        $data = strukturbkk::find(1);
        $data->update([
            'isi_artikel' => $request->isi_artikel,
        ]);

        if ($request->hasFile('foto_struktur')) {
            $request->file('foto_struktur')->move('assets/img/', $request->file('foto_struktur')->getClientOriginalName());
            $data->foto_struktur = $request->file('foto_struktur')->getClientOriginalName();
            $data->save();
        }

        return redirect("/index/sobkk")->with("success", "Data Berhasil Di Ubah");
    }
    public function deletesobkk($key){
        $data = strukturbkk::all()->first();
        $nama = json_decode($data->nama_member);
        $foto = json_decode($data->foto_member);
        unset($nama[$key]);
        unset($foto[$key]);
        $data->nama_member = $nama;
        $data->foto_member = $foto;
        $data->save();
        // dd($data);
        return redirect("/index/sobkk")->with("success","Data berhasil Dihapus");

    }
    //sidesobkk
    public function sidesobkk()
    {

        // $tes1 = ["detailbkk1.jpg", "detailbkk2.jpg", "detailbkk3.jpg", "detailbkk4.jpg", "detailbkk5.jpg"];
        // $tes2 = json_encode($tes1);
        // dd($tes2);
        return view("Admin.bkk.strukturbkk.sidestruktursobkk");
    }
    public function editupdatesidesobkk(Request $request)
    {
        $data = strukturbkk::find(1);
        $foto = json_decode($data->foto_member);
        $nama = json_decode($data->nama_member);
        $files = [];
        if ($request->hasfile('foto_member')) {
            foreach ($request->foto_member as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('assets/img/so/'), $name);
                $files[] = $name;
            }
        }
        $foto_up = array_merge($foto, $files);
        $data->foto_member = json_encode($foto_up);
        $nama_up = array_merge($nama, $request->nama_member);
        $data->nama_member = json_encode($nama_up);
        $data->save();
        return redirect('/index/sobkk')->with("success", "angggota berhasil ditambagkan");
    }
    public function oneupdatesidesobkk(Request $request, $key)
    {
        $data = strukturbkk::get()->first();
        $nama = json_decode($data->nama_member);
        $foto = json_decode($data->foto_member);
        $fotoup = $foto[$key];
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('assets/img/so/', $request->file('foto')->getClientOriginalName());
            $fotoup = $request->file('foto')->getClientOriginalName();
        }
        $nama[$key] = $request->nama;
        $foto[$key] = $fotoup;
        $data->nama_member = json_encode($nama);
        $data->foto_member = json_encode($foto);
        // dd($data->nama_member);
        $data->save();
        // dd($data);
        return redirect("/index/sobkk")->with("success", "data berhasil di upadte");
    }
    //end sobkk

    //start kegiatan bkk
    public function kegiatan_bkk()
    {
        $data = kegiatanbkk::all();
        return view("Admin.bkk.kegiatan_bkk.kegiatanbkk", compact("data"));
    }
    public function addkegiatan()
    {

        return view("Admin.bkk.kegiatan_bkk.addkegiatan");
    }
    public function insertkegiatanbkk(Request $request)
    {
        // dd($request->all());
        $files = [];
        if ($request->hasfile('foto')) {
            foreach ($request->foto as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('assets/img/detailbkk/'), $name);
                $files[] = $name;
            }
        }
        // $fotoside = implode(',',$files);
        $model  = new kegiatanbkk();
        $model->judul = $request->judul;
        $model->foto = json_encode($files);
        $model->save();
        // dd($model);
        return redirect("/index/kegiatan-bkk")->with("success", "Data Berhasil Ditambahkan");
    }
    public function viewkegiatanbkk($id)
    {
        $data = kegiatanbkk::findorfail($id);
        return view("Admin.bkk.kegiatan_bkk.viewkegiatanbkk", compact("data"));
    }
    public function editkegiatanbkk(Request $request, $id)
    {
        // dd($request->foto);
        $data = kegiatanbkk::findorfail($id);
        $data->update([
            "judul" => $request->judul,
        ]);

        if ($request->hasfile('foto')) {
            $keyarray1 =  array_keys($request->foto);
            $foto = [];
            // $hasil = array_combine($tes,$foto);
            $i = 0;
            foreach ($request->foto as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('assets/img/detailbkk/'), $name);
                $foto[$keyarray1[$i]] = $name;
                $i++;
            }
            $fotoin = json_decode($data->foto);
            // dd($foto);
            foreach ($keyarray1 as $key) {
                $fotoin[$key] = $foto[$key];
            }
            $data->foto = $fotoin;
            $data->save();
        }
        return redirect("/index/kegiatan-bkk");
    }
    public function deletekegiatanbkk($id)
    {
        $data = kegiatanbkk::findorfail($id);
        $data->delete();
        return redirect("/index/kegiatan-bkk")->with("success", "Data Berhasil dihapus");
    }
    //end kegiatan bkk


    //start bimbingan karir
    public function bimbingan_bkk()
    {
        $data = Bimbingankarir::all();
        return view("Admin.bkk.bimbingan_karir.bimbingan", compact("data"));
    }
    public function addbimbingan()
    {
        return view("Admin.bkk.bimbingan_karir.addbimbingan");
    }
    public function insertbimbingan(Request $request)
    {
        $data = Bimbingankarir::create([
            'judul' => $request->judul,
            'link' => $request->link,
            'foto' => $request->foto
        ]);
        // dd($data);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect("/index/bimbingan-karir")->with("success", "Data Berhasil Ditambahkan");
    }
    public function viewbimbingan($id)
    {
        $data = Bimbingankarir::findorfail($id);
        return view("Admin.bkk.bimbingan_karir.updatebimbingan", compact("data"));
    }
    public function editbimbingan(Request $request, $id)
    {
        $data = Bimbingankarir::find($id);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $namafoto = $request->file('foto')->getClientOriginalName();
            $data->update([
                'foto' => $namafoto,
                'judul' => $request->judul,
                'link' => $request->link,

            ]);
        } else {
            $data->update([
                //'foto' => request->foto
                'judul' => $request->judul,
                'link' => $request->link,

            ]);
        }
        return redirect("/index/bimbingan-karir");
    }
    public function deletebimbingan($id)
    {
        $data = Bimbingankarir::findorfail($id);
        $data->delete();
        return redirect("/index/bimbingan-karir")->with("success", "Data Berhasil dihapus");
    }
    //end kegiatan bkk


    //start kewirausahaan bkk
    public function kewirausahaansketsu()
    {
        $data = kewirausahaansketsu::all()->first();
        // dd($data);
        return view("Admin.bkk.kewirausahaansketsu.kewirausahaansketsu", compact("data"));
    }
    public function addalumnikbkk()
    {
        // $tes1 = [];
        // $tes = ["a","b"];
        // $gab = array_merge($tes1,$tes);
        // dd($gab);
        return view("Admin.bkk.kewirausahaansketsu.addalumnikbkk");
    }
    public function insertalumnikbkk(request $request)
    {
        $model = kewirausahaansketsu::all()->first();
        // dd($data);
        $files = [];
        if ($request->hasfile('foto')) {
            foreach ($request->foto as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('assets/img/kewirausahaansketsu/'), $name);
                $files[] = $name;
            }
        }
        if (is_null($model)) {
            $model  = new kewirausahaansketsu;
            $model->wirausahaalumni = json_encode($files);
            $model->wirausahapesertadidik = '[]';
            $model->save();
        } else {
            $old = json_decode($model->wirausahaalumni);
            $add = array_merge($old, $files);
            $model->wirausahaalumni = json_encode($add);
            $model->save();
        }
        return redirect("/index/kewirausahaan-sketsu")->with("success", "data berhasil ditambahkan");
    }
    public function addsiswakbkk()
    {
        return view("Admin.bkk.kewirausahaansketsu.addsiswakbkk");
    }
    public function insertsiswakbkk(Request $request)
    {
        $model = kewirausahaansketsu::all()->first();
        // dd($data);
        $files = [];
        if ($request->hasfile('foto')) {
            foreach ($request->foto as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('assets/img/kewirausahaansketsu/'), $name);
                $files[] = $name;
            }
        }
        if (is_null($model)) {
            $model  = new kewirausahaansketsu;
            $model->wirausahapesertadidik = json_encode($files);
            $model->wirausahaalumni = '[]';
            $model->save();
        } else {
            $old = json_decode($model->wirausahapesertadidik);
            $add = array_merge($old, $files);
            $model->wirausahapesertadidik = json_encode($add);
            $model->save();
        }
        // $fotoside = implode(',',$files);
        return redirect("/index/kewirausahaan-sketsu")->with("success", "data berhasil ditambahkan");
    }
    public function deletepeserta($key)
    {
        $data = kewirausahaansketsu::all()->first();
        $fotopeserta = json_decode($data->wirausahapesertadidik);
        unset($fotopeserta[$key]);
        $data->wirausahapesertadidik = $fotopeserta;
        $data->save();
        return redirect("/index/kewirausahaan-sketsu")->with("success","Data Berhasil dihapus");
    }
    public function deletealumni($key){
        $data = kewirausahaansketsu::all()->first();
        $fotoalumni = json_decode($data->wirausahaalumni);
        unset($fotoalumni[$key]);
        $data->wirausahaalumni = $fotoalumni;
        $data->save();
        return redirect("/index/kewirausahaan-sketsu")->with("success","Data Berhasil dihapus");
    }
    //end kewirausahaan bkk

    //start lowongan_kerja
    public function lowongan_kerja()
    {
        $lowongan = lowongankerja::all();
        return view("Admin.bkk.lowongankerja.lowongankerja", compact("lowongan"));
    }
    public function addlowongan_kerja()
    {
        return view("Admin.bkk.lowongankerja.addlowongankerja");
    }
    public function insertlowongankerja(request $request)
    {
        // dd($request->all());
        $data = lowongankerja::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('assets/img/lowongankerja/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        // dd($data);
        return redirect("/index/lowongankerja");
    }
    public function showlowongankerja($id)
    {
        $data = lowongankerja::findorfail($id);
        return view("Admin.bkk.lowongankerja.editlowongankerja", compact("data"));
        // $data->update([

        // ]);
    }
    public function editlowongankerja(request $request,$id){
        $data = lowongankerja::findorfail($id);
        $data->update([
            "judul" => $request->judul,
            "deskripsi" => $request->deskripsi,
            "status" => $request->status,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('assets/img/lowongankerja/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect("/index/lowongankerja")->with("success","Data berhasil diedit");
    }
    public function deletelowongan($id){
        $data = lowongankerja::findorfail($id);
        $data->delete();
        return redirect("/index/lowongankerja")->with("success","data berhasil dihapus");
    }
    //end lowongan_kerja

    //start perusahaan-mitra
    public function perusahaanmitra()
    {
        $perusahaan = perusahaan_mitra::all();
        $umkmpasangan = umkm_pasangan::get();
        return view("Admin.bkk.perusahaanmitra.perusahaanmitra", compact("perusahaan", "umkmpasangan"));
    }
    public function addpt()
    {
        return view("Admin.bkk.perusahaanmitra.addpt");
    }
    public function insertperusahaanmitra(Request $request)
    {
        $data = perusahaan_mitra::create($request->all());
        return redirect("/index/perusahaanmitra")->with("success", "data berhasil ditambahkan");
    }
    public function showaddpt($id){
        $data = perusahaan_mitra::find($id);
        return view("Admin.bkk.perusahaanmitra.showaddpt",compact("data"));
    }
    public function editperusahaanmitra(Request $request,$id){
        $data = perusahaan_mitra::findorfail($id);
        $data->update($request->all());
        return redirect("/index/perusahaanmitra")->with("success", "data berhasil diedit");
    }
    public function deletemitra($id){
        $data = perusahaan_mitra::findorfail($id);
        $data->delete();
        return redirect("/index/perusahaanmitra")->with("success", "data berhasil dihapus");
    }
    //umkm pasangan
    public function addumkm()
    {
        return view("Admin.bkk.perusahaanmitra.addumkm");
    }
    public function insertumkmpasangan(Request $request)
    {
        $data = umkm_pasangan::create($request->all());
        return redirect("/index/perusahaanmitra")->with("success", "data berhasil ditambahkan");
    }
    public function showumkm($id){
        $data = umkm_pasangan::findorfail($id);
        return view("Admin.bkk.perusahaanmitra.showumkm",compact("data"));
    }
    public function editshowumkm(Request $request,$id){
        $data = umkm_pasangan::find($id);
        $data->update($request->all());
        return redirect("/index/perusahaanmitra")->with("success","Data Berhasil Di Edit");
    }
    public function deleteumkm($id){
        $data = umkm_pasangan::findorfail($id);
        $data->delete();
        return redirect("/index/perusahaanmitra")->with("success","Data Berhasil Dihapus");
    }
    //end perusahaan mitra

    //start bkk definition
    public function indexbkk()
    {
        $data = BKK::where('id', '=', 1)->firstOrFail();
        return view('Admin.bkk.bkk', compact('data'));
    }


    public function edit(Request $request)
    {
        // dd($request->all());
        $data = BKK::get()->first();
        // dd($data);
        $data->update([
            // 'foto1' => $namafoto,
            'judul' => $request->judul,
            'sub_judul1' => $request->sub_judul1,
            'deskripsi' => $request->deskripsi,
            'sub_judul2' => $request->sub_judul2,
            'judul_sidebar' => $request->judul_sidebar,
        ]);
        if ($request->hasFile('foto1')) {
            $request->file('foto1')->move('foto/', $request->file('foto1')->getClientOriginalName());
            $data->foto1 = $request->file('foto1')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('foto2')) {
            $request->file('foto2')->move('foto/', $request->file('foto2')->getClientOriginalName());
            $data->foto2 = $request->file('foto2')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('foto3')) {
            $request->file('foto3')->move('foto/', $request->file('foto3')->getClientOriginalName());
            $data->foto3 = $request->file('foto3')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('foto4')) {
            $request->file('foto4')->move('foto/', $request->file('foto4')->getClientOriginalName());
            $data->foto4 = $request->file('foto4')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('foto5')) {
            $request->file('foto5')->move('foto/', $request->file('foto5')->getClientOriginalName());
            $data->foto5 = $request->file('foto5')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('foto6')) {
            $request->file('foto6')->move('foto/', $request->file('foto6')->getClientOriginalName());
            $data->foto6 = $request->file('foto6')->getClientOriginalName();
            $data->save();
        }
        // dd($data);
        else {
            $data->update([
                //'foto' = request->foto
                'judul' => $request->judul,
                'sub_judul1' => $request->sub_judul1,
                'deskripsi' => $request->deskripsi,
                'sub_judul2' => $request->sub_judul2,
                'judul_sidebar' => $request->judul_sidebar,

            ]);
        }
        // $data->update($request->all());
        return redirect('index/bkk')->with('success', 'Berhasil Di Update');
    }

    //end bkk definition
    ///////////////////// END BKK LANDINGPAGE ADMIN ///////////////////////////
}
