<?php

namespace App\Http\Controllers;

use App\Models\profilsekolah;
use App\Models\profilvisimisi;
use App\Models\sejarahsingkat;
use App\Models\strukturorganisasi;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function index(){
        return view ('Admin.index');
    }
    ///////////////////// START PROFIL LANDINGPAGE ADMIN ///////////////////////////
    //start profil
    public function profil(){
        $data = profilsekolah::all();
        return view ('admin.profil.profil.profil',compact('data'));
    }
    public function addprofil(){
        return view ('admin.profil.profil.addprofil');
    }
    public function insertprofil(Request $request){
        dd($request->all());
        $data = profilsekolah::create($request->all());
        if ($request->hasFile('foto_sekolah')) {
            $request->file('foto_sekolah')->move('assets/img/visimisi/', $request->file('foto_sekolah')->getClientOriginalName());
            $data->foto_sekolah = $request->file('foto_sekolah')->getClientOriginalName();
            $data->save();
        }
        // dd($data);
        return redirect('/index/profil')->with('success','Data Berhasil Ditambahkan');
    }
    //end profil
    // start profilvisimisi-admin
    public function profilvisimisi()
    {
        $data = profilvisimisi::all();
        return view('admin.profil.visimisi.visimisi',compact('data'));
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
        return redirect('/index/profil')->with('success','Data Berhasil Ditambahkan');
    }
    public function editviewvisimisi($id){
        $data = profilvisimisi::find($id);
        return view('Admin.profil.visimisi.editvisimisi',compact('data'));
    }
    public function editvisimisi(Request $request,$id)
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
    public function deletevisimisi($id){
        $data = profilvisimisi::find($id);
        $data->delete();
        return redirect('/index/profil')->with('success', 'Berhasil Di Hapus');
    }
    // end profilvisimisisekolah-admin

    // start profil/strukturorganisasi
    public function strukturorganisasi(){
        $data = strukturorganisasi::all();
        return view('admin.profil.strukturorganisasi.strukturorganisasi',compact('data'));
    }
    public function addstrukturorganisasi(){
        return view('admin.profil.strukturorganisasi.addstrukturorganisasi');
    }

    public function insertstrukturorganisasi(Request $request){
        $data = strukturorganisasi::create([
          'judul' => $request->judul,
          'tahun_ajaran' => $request->tahun_ajaran,
            'foto_struktur' => $request->foto_struktur,
            'foto_sidestruktur' => $request->foto_sidestruktur,
        ]);
        // dd($data);
        if ($request->hasFile('foto_struktur')) {
            $request->file('foto_struktur')->move('struktur/', $request->file('foto_struktur')->getClientOriginalName());
            $data->foto_struktur = $request->file('foto_struktur')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('foto_sidestruktur')) {
            $request->file('foto_sidestruktur')->move('sidestruktur/', $request->file('foto_sidestruktur')->getClientOriginalName());
            $data->foto_sidestruktur = $request->file('foto_sidestruktur')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('strukturorganisasi')->with('success', 'Berhasil Di Tambahkan');
    }

    public function editstrukturorganisasi($id){
        $data = strukturorganisasi::findorfail($id);
        return view('admin.profil.strukturorganisasi.editstrukturorganisasi', compact('data'));
    }
    public function updatestrukturorganisasi(Request $request, $id)
    {

        $data = strukturorganisasi::find($id);
        $data->update([
          'judul' => $request->judul,
          'tahun_ajaran' => $request->tahun_ajaran
            // 'foto_struktur' => $request->foto_struktur,
            // 'foto_sidestruktur' => $request->foto_sidestruktur,
        ]);
        // dd($data);
        if ($request->hasFile('foto_struktur')) {
            $request->file('foto_struktur')->move('struktur/', $request->file('foto_struktur')->getClientOriginalName());
            $data->foto_struktur = $request->file('foto_struktur')->getClientOriginalName();
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
    // end profil/strukturorganisasi

    public function sejarahsingkat(){
        $data=sejarahsingkat::all();
        return view('Admin.profil.sejarahsingkat.sejarahsingkat', compact('data'));
    }
    public function addsejarahsingkat(){
        return view('Admin.profil.sejarahsingkat.addsejarahsingkat');
    }
    public function insertsejarahsingkat(Request $request)
    {
        $data = sejarahsingkat::create([
            'judul' => $request->judul,
            'isi_artikel' => $request->isi_artikel,
            'judul_fotoside' => $request->judul_fotoside,
            'foto_side' => $request->foto_side,
        ]);
        // dd($data);
        if ($request->hasFile('foto-side')) {
            $request->file('foto_side')->move('fotosejarah/', $request->file('foto_side')->getClientOriginalName());
            $data->foto_side = $request->file('foto_side')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('sejarahsingkat')->with('success', 'Berhasil Di Tambahkan');
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

    ///////////////////// END PROFIL LANDINGPAGE ADMIN ///////////////////////////
}
