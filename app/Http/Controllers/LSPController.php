<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\LSP;
use App\Models\Visimisilsp;
use Illuminate\Http\Request;

class LSPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexlsp()
    {
        $data = LSP::where('id','=',1)->firstOrFail();
        return view('Admin.lsp.lsp', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $this->validate($request,[
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'papannama' => $request->papannama,
            'kantor' => $request->kantor,
            'denah' => $request->denah,
            'link' => $request->link
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LSP  $lSP
     * @return \Illuminate\Http\Response
     */
    public function show(LSP $lSP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LSP  $lSP
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $data = LSP::find($request->id);
        $data->update($request->all());
        return redirect ('index/lsp');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LSP  $lSP
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, LSP $lSP)
    {
        $data = DB::table('l_s_p_s')->where('id', $id);
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
                'foto' => $namafoto1,
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LSP  $lSP
     * @return \Illuminate\Http\Response
     */
    public function destroy(LSP $lSP)
    {
        //
    }

    public function visimisilsp()
    {
        $data = Visimisilsp::where('id', '=', 1)->firstOrFail();
        return view('Admin.lsp.visimisi', compact('data'));
    }
    public function editlsp(Request $request)
    {
        $data = Visimisilsp::find($request->id);
        $data->update($request->all());
        return redirect('index/visimisilsp');
    }
}
