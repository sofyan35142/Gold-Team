<?php

namespace App\Http\Controllers;

use App\Models\Dharma;
use App\Models\ekstra;
use App\Models\Guru;
use App\Models\prestasi;
use Illuminate\Http\Request;

class DataController extends Controller
{

    public function ekstra()
    {

        $data = ekstra::all();
        return view('Admin.Data.ekstra.ekstra', compact('data'));
    }

    public function tambahekstra()
    {
        return view('Admin.Data.ekstra.tambahekstra');
    }

    public function insertekstra(Request $request)
    {
        $data = ekstra::create([

            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'nama' => $request->nama,
            'foto' => $request->foto,
            'foto_pembina' => $request->foto_pembina
        ]);
        // dd($data);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotoekstra/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('foto_pembina')) {
            $request->file('foto_pembina')->move('fotoekstra/', $request->file('foto_pembina')->getClientOriginalName());
            $data->foto = $request->file('foto_pembina')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('ekstra')->with('success', 'Berhasil Di Tambahkan');
    }

    public function editekstra($id)
    {
        $data = ekstra::findorfail($id);
        return view('Admin.Data.ekstra.editekstra', compact('data'));
    }

    public function updateekstra(Request $request, $id)
    {

        $data = ekstra::find($id);
        $data->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'nama' => $request->nama
        ]);
        // $data->update($request->all());
        // dd($data);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotoekstra/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('foto_pembina')) {
                $request->file('foto_pembina')->move('fotoekstra/', $request->file('foto_pembina')->getClientOriginalName());
                $data->foto = $request->file('foto_pembina')->getClientOriginalName();
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





    ///////////////---------------GURU----------------------------//////////////
    public function guru()
    {
        $data = Guru::all();
        return view('Admin.Data.Guru.guru', compact('data'));
    }

    public function tambahguru()
    {
        return view('Admin.Data.Guru.tambahguru');
    }

    public function insertguru(Request $request)
    {
        $data = Guru::create([

            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'nip' => $request->nip,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'tmt_awal' => $request->tmt_awal,
            'status' => $request->status,
            'gol_ruangan' => $request->gol_ruangan,
            'foto' => $request->foto
        ]);
        // dd($data);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('guru/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('guru')->with('success', 'Berhasil Di Tambahkan');
    }

    public function editguru($id)
    {
        $data = Guru::findorfail($id);
        return view('Admin.Data.Guru.editguru', compact('data'));
    }

    public function updateguru(Request $request, $id)
    {

        $data = Guru::find($id);
        $data->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'nip' => $request->nip,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'tmt_awal' => $request->tmt_awal,
            'status' => $request->status,
            'gol_ruangan' => $request->gol_ruangan,
        ]);
        // $data->update($request->all());
        // dd($data);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('guru/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('guru')->with('success', 'Berhasil Di Update');
    }

    public function deleteguru($id)
    {
        $data = Guru::find($id);
        $data->delete();
        return redirect()->route('guru')->with('success', 'Berhasil Di Hapus');
    }

    ////////////-------------DHARMAWANITA-------------///////////////
    public function dharma()
    {
        $data = Dharma::all();
        return view('Admin.Data.Dharma.dharma', compact('data'));
    }

    public function tambahdharma()
    {
        return view('Admin.Data.Dharma.tambahdharma');
    }

    public function insertdharma(Request $request)
    {
        $data = Dharma::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'foto' => $request->foto
        ]);
        // dd($data);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('dharmawanita/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('dharma')->with('success', 'Berhasil Di Tambahkan');
    }

    public function editdharma($id)
    {
        $data = dharma::findorfail($id);
        return view('Admin.Data.Dharma.editdharma', compact('data'));
    }

    public function updatedharma(Request $request, $id)
    {

        $data = Dharma::find($id);
        $data->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            // 'foto' => $request->foto
        ]);
        // $data->update($request->all());
        // dd($data);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('dharmawanita/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('dharma')->with('success', 'Berhasil Di Update');
    }

    public function deletedharma($id)
    {
        $data = Dharma::find($id);
        $data->delete();
        return redirect()->route('dharma')->with('success', 'Berhasil Di Hapus');
    }


    ////////////-------------PRESTASI------------------////////////////
    public function prestasi()
    {
        $data = prestasi::all();
        return view('Admin.Data.prestasi.prestasi', compact('data'));
    }

    public function tambahprestasi()
    {
        return view('Admin.Data.prestasi.tambahprestasi');
    }

    public function insertprestasi(Request $request)
    {
        $data = prestasi::create([
           'nama_lomba' => $request->nama_lomba,
           'nama_pemenang' => $request->nama_pemenang,
           'deskripsi' => $request->deskripsi,
           'foto' => $request->foto,
        ]);
        // dd($data);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('prestasi/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('prestasi')->with('success', 'Berhasil Di Tambahkan');
    }

    public function editprestasi($id)
    {
        $data = prestasi::findorfail($id);
        return view('Admin.Data.prestasi.editprestasi', compact('data'));
    }

    public function updateprestasi(Request $request, $id)
    {

        $data = prestasi::find($id);
        $data->update(['nama_lomba' => $request->nama_lomba,
            'nama_pemenang' => $request->nama_pemenang,
            'deskripsi' => $request->deskripsi,
            // 'foto' => $request->foto
        ]);
        // dd($data);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('prestasi/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('prestasi')->with('success', 'Berhasil Di Update');
    }

    public function deleteprestasi($id)
    {
        $data = prestasi::find($id);
        $data->delete();
        return redirect()->route('prestasi')->with('success', 'Berhasil Di Hapus');
    }
}
