<?php

namespace App\Http\Controllers;

use App\Models\Sosmed;

use Illuminate\Http\Request;

class SosmedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Sosmed()
    {
        
        $data = sosmed::all();
        
        return view('Admin.Sosmed.Sosmed', compact( 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Sosmed::all();
        
        return view('Admin.Sosmed.tambahSosmed', compact('data', ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Sosmed::create($request->all());
        // dd($data);
        
        
        return redirect()->route('Sosmed')->with('success', 'Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sosmed  $Sosmed
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Sosmed::findOrFail($id);
      

        //dd($data);

        return view('Admin.Sosmed.editSosmed', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sosmed  $Sosmed
     * @return \Illuminate\Http\Response
     */
    public function edit(Sosmed $Sosmed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sosmed  $Sosmed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Sosmed::find($id);
        $data->update([
            'script_logo' => $request->script_logo,
            'jenis_sosmed' => $request->jenis_sosmed,
            'link' => $request->link,
        ]);

        return redirect()->route('Sosmed')->with('success', 'Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sosmed  $Sosmed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sosmed $Sosmed, $id)
    {
        $data = Sosmed::find($id);
        $data->delete();
        return redirect()->route('Sosmed')->with('success', 'Berhasil Di Hapus');
    }
}

