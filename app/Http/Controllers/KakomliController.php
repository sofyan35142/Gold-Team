<?php

namespace App\Http\Controllers;

use App\Models\Kakomli;
use App\Models\Jurusan;
use App\Models\kategoriblog;
use Illuminate\Http\Request;

class KakomliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kakomli()
    {
        $kakomli = Kakomli::with('jurusan');
        $data = Kakomli::all();
        $datajurusan = Jurusan::all();
        return view('Admin.kakomli.kakomli', compact('kakomli', 'data', 'datajurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Kakomli::all();
        $datajurusan = Jurusan::all();
        return view('Admin.kakomli.tambahkakomli' , compact('data', 'datajurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = Kakomli::create([
            'nama_guru' => $request->nama_guru,
            'id_jurusan' => $request->id_jurusan,
            'deskripsi' => $request->deskripsi,
            'foto' => $request->foto
        ]);
        // dd($data);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('kakomli/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('kakomli')->with('success', 'Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kakomli  $kakomli
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Kakomli::findOrFail($id);
        $datajurusan = Jurusan::all();

        //dd($data);

        return view('Admin.kakomli.editkakomli', compact('data', 'datajurusan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kakomli  $kakomli
     * @return \Illuminate\Http\Response
     */
    public function edit(Kakomli $kakomli)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kakomli  $kakomli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Kakomli::find($id);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('kakomli/', $request->file('foto')->getClientOriginalName());
            $namafoto = $request->file('foto')->getClientOriginalName();
            $data->update([
                'foto' => $namafoto,
                'nama_guru' => $request->nama_guru,
                'id_jurusan' => $request->id_jurusan,
                'deskripsi' => $request->deskripsi,
            ]);
        } else {
            $data->update([
                //'foto' => request->foto
                'nama_guru' => $request->nama_guru,
                'id_jurusan' => $request->id_jurusan,
                'deskripsi' => $request->deskripsi,

            ]);
        }

        return redirect()->route('kakomli')->with('success', 'Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kakomli  $kakomli
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kakomli::find($id);
        $data->delete();
        return redirect()->route('kakomli')->with('success', 'Berhasil Di Hapus');
    }
}
