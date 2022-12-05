<?php

namespace App\Http\Controllers;

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
        $data = profilsekolah::all();
        return view('admin.profil.profil.profil', compact('data'));
    }
    public function addprofil(Request $request,$profil)
    {
        // dd($request->$profil);
        $data = profilsekolah::find(1);
        $data->update(([$profil=>$request->$profil]));
        if ($request->hasFile('foto_sekolah')) {
            $request->file('foto_sekolah')->move('assets/img/fotoprofilsekolah/', $request->file('foto_sekolah')->getClientOriginalName());
            $data->foto_sekolah = $request->file('foto_sekolah')->getClientOriginalName();
            $data->save();
        }
        // $profil->update(([$id => '-']));
        return redirect('/index/profil')->with("success","Data berhasil diubah");
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
        $data = profilvisimisi::all();
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
        return view('admin.profil.strukturorganisasi.strukturorganisasi', compact('struktur','datafotonama'));
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
        return view('Admin.profil.strukturorganisasi.addeditsidestruktur',compact('datanama','datafoto'));
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
    public function editsekolahadiwiyata(){

    }
    // end profil/sekolahadiwiyata

    public function sejarahsingkat(){
        $data=sejarahsingkat::all();
        return view('Admin.profil.sejarahsingkat.sejarahsingkat', compact('data'));
    }
    public function addsejarahsingkat(){
        return view('Admin.profil.sejarahsingkat.addsejarahsingkat');
    }
    public function insertsejarahsingkat(Request $request)
    {
        // $data = sejarahsingkat::create([
        //     'judul' => $request->judul,
        //     'isi_artikel' => $request->isi_artikel,
        //     'judul_fotoside' => $request->judul_fotoside,
        // ]);
        $files = [];
        if($request->hasfile('foto_side')){
            foreach($request->foto_side as $file){
                $name = $file->getClientOriginalName();
                $file->move(public_path('file'),$name);
                $files[] = $name;
            }
        }
        // $fotoside = implode(',',$files);
        $file  = new sejarahsingkat();
        $file->judul = $request->judul;
        $file->isi_artikel = $request->isi_artikel;
        $file->judul_fotoside = $request->judul_fotoside;
        $file->foto_side = json_encode($files);
        // dd($file->foto_side);
        $file->save();
        return redirect('/index/sejarahsingkat')->with('success', 'Berhasil Di Tambahkan');
    }
    public function editviewsejarahsingkat($id)
    {
        $data = sejarahsingkat::findorfail($id);
        return view('Admin.profil.sejarahsingkat.editsejarahsingkat', compact('data'));
    }
    public function updatesejarahsingkat(Request $request, $id)
    {

        $data = sejarahsingkat::find($id);
        $data->update([
            'judul' => $request->judul,
            'isi_artikel' => $request->isi_artikel,
            'judul_fotoside' => $request->judul_fotoside
        ]);
        // dd($data);
        if ($request->hasFile('foto_side')) {
            $request->file('foto_side')->move('fotosejarah/', $request->file('foto_side')->getClientOriginalName());
            $data->foto_side = $request->file('foto_side')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('sejarahsingkat')->with('success', 'Berhasil Di Edit');
    }

    public function deletesejarahsingkat($id)
    {
        $data = sejarahsingkat::find($id);
        $data->delete();
        return redirect()->route('sejarahsingkat')->with('success', 'Berhasil Di Hapus');
    }
    //start sekolah rujukan
    public function sekolahrujukan()
    {
        $data = sekolahrujukan::find(1);
        return view("admin.profil.sekolah_rujukan.sekolahrujukan",compact('data'));
    }
    public function editviewsekolahrujukan()
    {
        $data = sekolahrujukan::find(1);
        return view("admin.profil.sekolah_rujukan.editsekolahrujukan",compact('data'));
    }
    public function editsekolahrujukan(Request $request)
    {
        // dd($request->all());
        $data = sekolahrujukan::find(1);
        $data->update([
            'isiartikel'=>$request->isiartikel,
        ]);
        if ($request->hasFile('foto_head')) {
            $request->file('foto_head')->move('assets/img/', $request->file('foto_head')->getClientOriginalName());
            $data->foto_head = $request->file('foto_head')->getClientOriginalName();
            $data->save();
        }
        return redirect("/index/sekolahrujukan")->with('success','data berhasil diubah');
    }
    public function resetsekolahrujukan()
    {
        // dd($request->all());
        $data = sekolahrujukan::find(1);
        $data->update([
            'foto_head'=>'-',
            'isiartikel'=>'-',
        ]);
        return redirect("/index/sekolahrujukan")->with('success','data berhasil direset');
    }
    //end sekolah rujukan

    ///////////////////// END PROFIL LANDINGPAGE ADMIN ///////////////////////////
}
