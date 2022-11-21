<?php

namespace App\Http\Controllers;

use App\Models\ekstra;
use Illuminate\Http\Request;

class DataController extends Controller
{

    public function ekstra(){

        $data=ekstra::all();
        return view('Admin.Data.ekstra.ekstra', compact('data'));
    }

    public function tambahekstra(){
        return view('Admin.Data.ekstra.tambahekstra');
    }

     public function insertekstra(Request $request)
    {
        $data = ekstra::create([

            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'nama' => $request->nama,
            'foto' => $request->foto
        ]);
        // dd($data);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotoekstra/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('ekstra')->with('success', 'Berhasil Di Tambahkan');
    }

    public function editekstra($id){
         $data = ekstra::findorfail($id);
        return view('Admin.Data.ekstra.editekstra', compact('data'));
    }

     public function updateekstra(Request $request, $id)
    {

        $data = ekstra::find($id);
        $data->update([
            'judul'=> $request->judul,
            'deskripsi'=> $request->deskripsi,
            'nama'=> $request->nama
        ]);
        // $data->update($request->all());
        // dd($data);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotoekstra/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('ekstra')->with('success', 'Berhasil Di Update');
    }

   public function deleteekstra($id)
    {
        $data = ekstra::find($id);
        $data->delete();
        return redirect()->route('ekstra')->with('success', 'Berhasil Di Hapus');
    }

}

