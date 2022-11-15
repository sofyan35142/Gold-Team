<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function jurusanview()
    {
        $data=Jurusan::all();
        return view('Admin.jurusan.jurusan',compact('data'));
    }
    public function tambahjurusan()
    {
        return view('Admin.jurusan.tambahjurusan');
    }
    public function insertjurusan(Request $request)
    {
        // dd($request->all);
        // $this->validate($request, [
        //     'jurusan' => 'required|max:255',
        //     'singkatan' => 'required',
        //     'deskripsi' => 'required|not_in:0',
        //     'foto' =>
        //     'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
        // ]);
        $data = Jurusan::create([
            
            'jurusan' => $request->jurusan,
            'singkatan' => $request->singkatan,
            'deskripsi' => $request->deskripsi,
            'foto' => $request->foto
        ]);
        // dd($data);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }        return redirect()->route('jurusanview')->with('success', 'Data Berhasil Di Tambahkan');
    }
}
