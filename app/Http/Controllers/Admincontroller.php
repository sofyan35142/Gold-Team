<?php

namespace App\Http\Controllers;

use App\Models\profilvisimisi;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function index(){
        return view ('Admin.index');
    }
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
        $data = "kon";
        return view('admin.profil.strukturorganisasi.strukturorganisasi',compact('data'));
    }
    public function addstrukturorganisasi(){
        $data = "kon";
        return view('admin.profil.strukturorganisasi.addstrukturorganisasi',compact('data'));
    }
    public function editstrukturorganisasi(){
        $data = "kon";
        return view('admin.profil.strukturorganisasi.editstrukturorganisasi',compact('data'));
    }
    // end profil/strukturorganisasi
    // end profil/strukturorganisasi
}
