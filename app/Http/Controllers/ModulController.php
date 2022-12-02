<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Reparasibengkel;
use App\Models\Modul;
use Illuminate\Http\Request;

class ModulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function modul()
    {
        $data = Modul::all();
        return view('Admin.modul.modul', compact('data'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updatemodultkr(Request $request)
    {
        $data = Modul::find($request->id);
        $data ->update($request->all());

        return redirect('index/modultkr')->with('success', 'Berhasil Di Update');
    }

    public function modultei()
    {
        $data = Modul::where('id', '=', 1)->firstOrFail();
        return view('Admin.modul.modultei', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updatemodultei(Request $request)
    {
        $data = Modul::find($request->id);
        $data->update($request->all());

        return redirect('index/modultei')->with('success', 'Berhasil Di Update');
    }
    public function create()
    {
        return view('Admin.modul.tambahmodul');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $this->validate($request, [
        //     'jurusan' => 'required|max:255',
        //     'singkatan' => 'required',
        //     'deskripsi' => 'required|not_in:0',
        //     'foto' =>
        //     'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
        // ]);
        $data = Modul::create([

            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto' => $request->foto,
            
        ]);
        // dd($data);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        
        return redirect()->route('modul')->with('success', 'Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modul  $modul
     * @return \Illuminate\Http\Response
     */
    public function show(Modul $modul, $id)
    {
        $data = Modul::findOrFail($id);
        $data = Modul::find($id);

        //dd($data);

        return view('Admin.modul.editmodul', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modul  $modul
     * @return \Illuminate\Http\Response
     */
    public function edit(Modul $modul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modul  $modul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Modul::find($id);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $namafoto = $request->file('foto')->getClientOriginalName();
            $data->update([
                'foto' => $namafoto,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
            ]);
       
        } else {
            $data->update([
                //'foto' => request->foto
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,

            ]);
        }

        return redirect()->route('modul')->with('success', 'Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modul  $modul
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Modul::find($id);
        $data->delete();
        return redirect()->route('modul')->with('success', 'Berhasil Di Hapus');
    }

///////BUKU REPARASI BENGKEL/////////////////


    public function reparasi()
    {
        $data = Reparasibengkel::all();
        return view('Admin.reparasi.reparasibengkel', compact('data'));
    }
    public function createreparasi()
    {
        return view('Admin.reparasi.tambahreparasi');
    }
    public function storereparasi(Request $request)
    {
        // dd($request->all());
        // $this->validate($request, [
        //     'jurusan' => 'required|max:255',
        //     'singkatan' => 'required',
        //     'deskripsi' => 'required|not_in:0',
        //     'foto' =>
        //     'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
        // ]);
        $data = Reparasibengkel::create([

            'namabuku' => $request->namabuku,
            'link' => $request->link,
            'foto' => $request->foto,

        ]);
        // dd($data);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('reparasi')->with('success', 'Berhasil Di Tambahkan');
    }
    public function showreparasi(Modul $modul, $id)
    {
        $data = Reparasibengkel::findOrFail($id);
        $data = Reparasibengkel::find($id);

        //dd($data);

        return view('Admin.reparasi.editreparasi', compact('data'));
    }
    public function updatereparasi(Request $request, $id)
    {
        $data = Reparasibengkel::find($id);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $namafoto = $request->file('foto')->getClientOriginalName();
            $data->update([
                'foto' => $namafoto,
                'namabuku' => $request->namabuku,
                'link' => $request->link,
            ]);
        } else {
            $data->update([
                //'foto' => request->foto
                'namabuku' => $request->namabuku,
                'link' => $request->link,

            ]);
        }

        return redirect()->route('reparasi')->with('success', 'Berhasil Di Update');
    }
    public function destroyreparasi($id)
    {
        $data = Reparasibengkel::find($id);
        $data->delete();
        return redirect()->route('reparasi')->with('success', 'Berhasil Di Hapus');
    }


    public function artikel()
    {
        $data = Artikel::where('id', '=', 1)->firstOrFail();
        return view('Admin.modul.artikel', compact('data'));
    }
    
    public function editartikel(Request $request)
    {
        $data = Artikel::find($request->id);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $namafoto = $request->file('foto')->getClientOriginalName();
            $data->update([
                'foto' => $namafoto,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'link' => $request->link,
                'linkyoutube' => $request->linkyoutube,
            ]);
        } else {
            $data->update([
                //'foto' => request->foto
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'link' => $request->link,
                'linkyoutube' => $request->linkyoutube,
            ]);
        }
        return redirect('index/artikel')->with('success', 'Berhasil Di Update');
    }
}
