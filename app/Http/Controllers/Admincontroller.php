<?php

namespace App\Http\Controllers;

use App\Models\kegiatanbkk;
use App\Models\kewirausahaansketsu;
use App\Models\strukturbkk;
use App\Models\visimisibkk;
use App\Models\sidestruktur;
use Illuminate\Http\Request;
use App\Models\profilsekolah;
use App\Models\profilvisimisi;
use App\Models\sejarahsingkat;
use App\Models\sekolahrujukan;
use App\Models\sekolahadiwiyata;
use App\Models\strukturorganisasi;

class Admincontroller extends Controller
{
    public function index()
    {
        return view('Admin.index');
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
        dd($request->all());
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
        return redirect('/index/profil')->with('success', 'Data Berhasil Di edit');
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
        $struktur = strukturorganisasi::find(1);
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

        $data = strukturorganisasi::find($id);
        $data->update([
            'judul' => $request->judul,
            'tahun_ajaran' => $request->tahun_ajaran
            // 'foto_adiwiyata' => $request->foto_adiwiyata,
            // 'foto_sidestruktur' => $request->foto_sidestruktur,
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
        return redirect()->route('strukturorganisasi')->with('success', 'Berhasil Di Edit');
    }

    public function deletestrukturorganisasi($id)
    {
        $data = strukturorganisasi::find($id);
        $data->delete();
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
    }
    // end profil/sekolahadiwiyata
    // Start profil/sejarahsingkat
    public function sejarahsingkat()
    {
        $sejarah = sejarahsingkat::find(1);

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
        $id = 1;
        $data = sejarahsingkat::findorfail($id);
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
        return redirect()->route('sejarahsingkat')->with('success', 'Berhasil Di Edit');
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
        $model = sejarahsingkat::find(1);
        $foto = json_decode($model->foto_side);
        $fotoup = array_merge($foto, $files);
        $model->foto_side = json_encode($fotoup);
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
    //end sejarah singkat
    //start sekolah rujukan
    public function sekolahrujukan()
    {
        $data = sekolahrujukan::find(1);
        return view("admin.profil.sekolah_rujukan.sekolahrujukan", compact('data'));
    }
    public function editviewsekolahrujukan()
    {
        $data = sekolahrujukan::find(1);
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
        $data = visimisibkk::find(1);
        return view("Admin.bkk.visimisibkk.visimisibkk", compact("data"));
    }
    public function editvisimisibkk()
    {
        $data = visimisibkk::find(1);
        return view("Admin.bkk.visimisibkk.editvisimisi", compact("data"));
    }
    public function editupdatevisimisibkk(Request $request)
    {
        $data = visimisibkk::find(1);
        dd($request->all());
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
        dd($request->all());
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
    public function deletekegiatanbkk($id){
        $data = kegiatanbkk::findorfail($id);
        $data->delete();
        return redirect("/index/kegiatan-bkk")->with("success","Data Berhasil dihapus");
    }
    //end kegiatan bkk
    //start kewirausahaan bkk
    public function kewirausahaansketsu(){
        $data = kewirausahaansketsu::all()->first();
        return view("Admin.bkk.kewirausahaansketsu.kewirausahaansketsu",compact("data"));
    }
    public function addalumnikbkk(){

        return view("Admin.bkk.kewirausahaansketsu.addalumnikbkk");
    }
    public function insertalumnikbkk(request $request){
        $model = kewirausahaansketsu::all()->first();
        // dd($data);
        $files = [];
        if ($request->hasfile('foto')) {
            foreach ($request->foto as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('/assets/img/kewirausahaansketsu/'), $name);
                $files[] = $name;
            }
        }
        if(is_null($model)){
        $model  = new kewirausahaansketsu;
        $model->wirausahaalumni = json_encode($files);
        // $model->wirausahapesertadidik = "";
        $model->save();
        }
        // $fotoside = implode(',',$files);
        // $model  = kewirausahaansketsu::all()->first();
        $model->wirausahaalumni = json_encode($files);
        $model->save();
        return redirect("/index/kewirausahaan-sketsu")->with("success","data berhasil ditambahkan");
    }
    //end kewirausahaan bkk
    ///////////////////// END BKK LANDINGPAGE ADMIN ///////////////////////////
}
