<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Kakomli;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function jurusanview()
    {
        $data = Jurusan::all();
        return view('Admin.jurusan.jurusan', compact('data'));
    }
    public function tambahjurusan()
    {
        return view('Admin.jurusan.tambahjurusan');
    }
    public function insertjurusan(Request $request)
    {
        // dd($request->all());
        // $this->validate($request, [
        //     'jurusan' => 'required|max:255',
        //     'singkatan' => 'required',
        //     'deskripsi' => 'required|not_in:0',
        //     'foto' =>
        //     'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
        // ]);
        $data = Jurusan::create([

            'jurusan' => $request->jurusan,
            'deskripsi' => $request->deskripsi,
            'foto' => $request->foto,
            'produktif' => $request->produktif
        ]);
        // dd($data);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('produktif')) {
            $request->file('produktif')->move('foto/jurusan/', $request->file('produktif')->getClientOriginalName());
            $data->produktif = $request->file('produktif')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('jurusanview')->with('success', 'Berhasil Di Tambahkan');
    }
    public function editjurusan($id)
    {

        $data = Jurusan::findOrFail($id);
        $data = Jurusan::find($id);

        //dd($data);

        return view('Admin.jurusan.editjurusan', compact('data'));
    }
    public function updatejurusan(Request $request, $id)
    {
        $data = Jurusan::find($id);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $namafoto = $request->file('foto')->getClientOriginalName();
            $data->update([
                'foto' => $namafoto,
                'jurusan' => $request->jurusan,
                'deskripsi' => $request->deskripsi,
            ]);
        }
        if ($request->hasFile('produktif')) {
            $request->file('produktif')->move('foto/jurusan/', $request->file('produktif')->getClientOriginalName());
            $namafoto1 = $request->file('produktif')->getClientOriginalName();
            $data->update([
                'produktif' => $namafoto1,
                'jurusan' => $request->jurusan,
                'deskripsi' => $request->deskripsi,
            ]);
        } else {
            $data->update([
                //'foto' => request->foto
                'jurusan' => $request->jurusan,
                'deskripsi' => $request->deskripsi,

            ]);
        }

        return redirect()->route('jurusanview')->with('success', 'Berhasil Di Update');
    }
    public function deletejurusan($id)
    {
        $count = Kakomli::where('id_jurusan', $id)->count();
        if ($count > 0) {
            return back()->with('error', 'Data masih digunakan');
        }
        $data = Jurusan::find($id);
        $data->delete();
        return redirect()->route('jurusanview')->with('success', 'Berhasil Di Hapus');
    }
}
