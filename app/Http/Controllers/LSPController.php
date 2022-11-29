<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\LSP;
use App\Models\Visimisilsp;
use App\Models\Skematerlisensi;
use App\Models\Tempatujikom;
use App\Models\Jmlpemegang;
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
        if ($request->hasFile('papannama')) {
            $request->file('papannama')->move('lsp/', $request->file('papannama')->getClientOriginalName());
            $namafoto = $request->file('papannama')->getClientOriginalName();
            $data->update([
                'papannama' => $namafoto,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
            ]);
        }
        if ($request->hasFile('kantor')) {
            $request->file('kantor')->move('lsp/', $request->file('kantor')->getClientOriginalName());
            $namafoto1 = $request->file('kantor')->getClientOriginalName();
            $data->update([
                'kantor' => $namafoto1,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
            ]);
            
        }
        if ($request->hasFile('denah')) {
            $request->file('denah')->move('lsp/', $request->file('denah')->getClientOriginalName());
            $namafoto2 = $request->file('denah')->getClientOriginalName();
            $data->update([
                'denah' => $namafoto2,
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
        $data->update($request->all());
        return redirect ('index/lsp')->with('success', 'Berhasil Di Update');
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
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('lsp/', $request->file('foto')->getClientOriginalName());
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
        return redirect('index/visimisilsp')->with('success', 'Berhasil Di Update');
    }
    public function skemalsp()
    {
        $data = Skematerlisensi::where('id', '=', 1)->firstOrFail();
        return view('Admin.lsp.skema', compact('data'));
    }
    public function updateskemalsp(Request $request)
    {
        $data = Skematerlisensi::find($request->id);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('lsp/', $request->file('foto')->getClientOriginalName());
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
        
        return redirect('index/skemalsp')->with('success', 'Berhasil Di Update');
    }

    public function ujikom()
    {
        $data = Tempatujikom::where('id', '=', 1)->firstOrFail();
        return view('Admin.lsp.tempatujikom', compact('data'));
    }
    public function updateujikom(Request $request)
    {
        $data = Tempatujikom::find($request->id);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('lsp/', $request->file('foto')->getClientOriginalName());
            $namafoto = $request->file('foto')->getClientOriginalName();
            $data->update([
                'foto' => $namafoto,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
            ]);
        }
        if ($request->hasFile('foto1')) {
            $request->file('foto1')->move('lsp/', $request->file('foto1')->getClientOriginalName());
            $namafoto1 = $request->file('foto1')->getClientOriginalName();
            $data->update([
                'foto1' => $namafoto1,
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

        return redirect('index/ujikomlsp')->with('success', 'Berhasil Di Update');
    }
    public function jml()
    {
        $data = Jmlpemegang::where('id', '=', 1)->firstOrFail();
        return view('Admin.lsp.jmlpemegang', compact('data'));
    }
    public function updatejml(Request $request)
    {
        $data = Jmlpemegang::find($request->id);
        if ($request->hasFile('jml')) {
            $request->file('jml')->move('lsp/', $request->file('jml')->getClientOriginalName());
            $namafoto = $request->file('jml')->getClientOriginalName();
            $data->update([
                'jml' => $namafoto,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
            ]);
        }
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('lsp/', $request->file('foto')->getClientOriginalName());
            $namafoto1 = $request->file('foto')->getClientOriginalName();
            $data->update([
                'foto' => $namafoto1,
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

        return redirect('index/jmllsp')->with('success', 'Berhasil Di Update');
    }

}
