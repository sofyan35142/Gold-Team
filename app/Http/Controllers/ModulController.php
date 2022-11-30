<?php

namespace App\Http\Controllers;

use App\Models\Modultei;
use App\Models\Modultkr;
use Illuminate\Http\Request;

class ModulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function modultkr()
    {
        $data = Modultkr::where('id', '=', 1)->firstOrFail();
        return view('Admin.modul.modultkr', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updatemodultkr(Request $request)
    {
        $data = Modultkr::find($request->id);
        $data ->update($request->all());

        return redirect('index/modultkr')->with('success', 'Berhasil Di Update');
    }

    public function modultei()
    {
        $data = Modultei::where('id', '=', 1)->firstOrFail();
        return view('Admin.modul.modultei', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updatemodultei(Request $request)
    {
        $data = Modultei::find($request->id);
        $data->update($request->all());

        return redirect('index/modultei')->with('success', 'Berhasil Di Update');
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modul  $modul
     * @return \Illuminate\Http\Response
     */
    public function show(Modultkr $modul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modul  $modul
     * @return \Illuminate\Http\Response
     */
    public function edit(Modultkr $modul)
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
    public function update(Request $request, Modultkr $modul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modul  $modul
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modultkr $modul)
    {
        //
    }
}
