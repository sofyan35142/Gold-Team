<?php

namespace App\Http\Controllers;

use App\Models\alumni;
use App\Models\Blog;
use App\Models\kepsek;
use App\Models\slider;
use App\Models\sponsor;
use App\Models\totalsiswa;
use App\Models\videoprofil;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function viewblog(){

        $data=Blog::all();
        return view('Admin.beranda.blog.blog', compact('data'));
    }

    public function tambahblog(){
        return view('Admin.beranda.blog.tambahblog');
    }

     public function insertblog(Request $request)
    {
        $data = Blog::create([

            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto' => $request->foto
        ]);
        // dd($data);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('blog/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('viewblog')->with('success', 'Berhasil Di Tambahkan');
    }

    public function editblog($id){
         $data = Blog::findorfail($id);
        return view('Admin.beranda.blog.editblog', compact('data'));
    }

     public function updateblog(Request $request, $id)
    {

        $data = Blog::find($id);
        $data->update([
            'judul'=> $request->judul,
            'deskripsi'=> $request->deskripsi,
        ]);
        // $data->update($request->all());
        // dd($data);
        if($request->hasFile('foto')){
            $request->file('foto')->move('blog/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('viewblog')->with('success', 'Berhasil Di Update');
    }

   public function deleteblog($id)
    {
        $data = Blog::find($id);
        $data->delete();
        return redirect()->route('viewblog')->with('success', 'Berhasil Di Hapus');
    }

    //////////////////////////---------------ALUMNI BOSS-----------------------/////////////////
    public function viewalumni(){
        $data=alumni::all();
        return view('Admin.beranda.alumni.alumni', compact('data'));
    }
    public function tambahalumni(){
        return view('Admin.beranda.alumni.tambahalumni');
    }
    public function insertalumni(Request $request){
        $data =alumni::create([
      'nama' => $request->nama,
      'pekerjaan' => $request->pekerjaan,
            'deskripsi' => $request->deskripsi,
            'foto' => $request->foto
        ]);
        // dd($data);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotoalumni/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('viewalumni')->with('success', 'Berhasil Di Tambahkan');
    }

    public function editalumni($id){
        $data=alumni::findOrFail($id);
        return view('Admin.beranda.alumni.editalumni', compact('data'));
    }
    public function updatealumni(Request $request, $id)
    {

        $data =alumni::find($id);
        $data->update([
            'nama' => $request->nama,
            'pekerjaan' => $request->pekerjaan,
            'deskripsi' => $request->deskripsi,
        ]);
        // $data->update($request->all());
        // dd($data);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotoalumni/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('viewalumni')->with('success', 'Berhasil Di Update');
    }

    public function deletealumni($id)
    {
        $data =alumni::find($id);
        $data->delete();
        return redirect()->route('viewalumni')->with('success', 'Berhasil Di Hapus');
    }

    ////////////////---------------------SAMBUTAN KEPALA SEKOLAH----------------////////////////////////
    public function sambutankepsek()
    {
        $data = kepsek::all();
        return view('Admin.beranda.sambutankepsek.sambutan', compact('data'));
    }
    public function editsambutan($id)
    {
        $data = kepsek::findOrFail($id);
        return view('Admin.beranda.sambutankepsek.editsambutan',compact('data'));
    }
    public function updatesambutan(Request $request, $id)
    {
        // dd('p');
        $data = kepsek::find($id);
        $data->update([
            'nama' => $request->nama,
            'sambutan' => $request->sambutan

        ]);
        // $data->update($request->all());
        // dd($data);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('kepsek/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('sambutankepsek')->with('success', 'Berhasil Di Update');
    }

    public function deletesambutan($id)
    {
        $data = kepsek::find($id);
        $data->delete();
        return redirect()->route('sambutankepsek')->with('success', 'Berhasil Di Hapus');
    }


    ////////////////-------TOTALL SISWA----------///////////////////
    public function totalsiswa()
    {
        $data = totalsiswa::all();
        return view('Admin.beranda.totalsiswa.totalsiswa', compact('data'));
    }
    public function edittotal($id)
    {
        $data = totalsiswa::findOrFail($id);
        return view('Admin.beranda.totalsiswa.edittotal', compact('data'));
    }
    public function updatetotal(Request $request, $id)
    {
        $data = totalsiswa::find($id);
        $data->update([
            'judul' => $request->judul,
            'laki_laki' => $request->laki_laki,
            'perempuan' => $request->perempuan,
            'total_siswa' => $request->total_siswa,
            'guru' => $request->guru,

        ]);
        // $data->update($request->all());
        // dd($data);

        return redirect()->route('totalsiswa')->with('success', 'Berhasil Di Update');
    }

    public function deletetotal($id)
    {
        $data = totalsiswa::find($id);
        $data->delete();
        return redirect()->route('totalsiswa')->with('success', 'Berhasil Di Hapus');
    }

    ////////////////////////-----------------SLIDER----------/////////////////
    public function slider()
    {
        $data = slider::all();
        return view('Admin.beranda.slider.slider', compact('data'));
    }
    public function editslider($id)
    {
        $data = slider::findOrFail($id);
        return view('Admin.beranda.slider.editslider', compact('data'));
    }
    public function updateslider(Request $request, $id)
    {
        $data = slider::find($id);
        $data->update([


        ]);
        // $data->update($request->all());
        // dd($data);
        if ($request->hasFile('foto1')) {
            $request->file('foto1')->move('fotoalumni/', $request->file('foto1')->getClientOriginalName());
            $data->foto = $request->file('foto1')->getClientOriginalName();
            $data->save();
        }

        if ($request->hasFile('foto2')) {
            $request->file('foto2')->move('fotoalumni/', $request->file('foto2')->getClientOriginalName());
            $data->foto = $request->file('foto2')->getClientOriginalName();
            $data->save();
        }

        if ($request->hasFile('foto3')) {
            $request->file('foto3')->move('fotoalumni/', $request->file('foto3')->getClientOriginalName());
            $data->foto = $request->file('foto3')->getClientOriginalName();
            $data->save();
        }


        return redirect()->route('slider')->with('success', 'Berhasil Di Update');
    }

    public function deleteslider($id)
    {
        $data = slider::find($id);
        $data->delete();
        return redirect()->route('slider')->with('success', 'Berhasil Di Hapus');
    }


    ////////////------------KERJASAMA----SPONSOR----/////////////////
    public function sponsor()
    {

        $data = sponsor::all();
        return view('Admin.beranda.sponsor.sponsor',compact('data'));
    }

    public function tambahsponsor()
    {
        return view('Admin.beranda.sponsor.tambahsponsor');
    }

    public function insertsponsor(Request $request)
    {
        $data = sponsor::create([
            'foto' => $request->foto
        ]);
        // dd($data);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('sponsor/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('sponsor')->with('success', 'Berhasil Di Tambahkan');
    }

    public function editsponsor($id)
    {
        $data = sponsor::findorfail($id);
        return view('Admin.beranda.sponsor.editsponsor', compact('data'));
    }

    public function updatesponsor(Request $request, $id)
    {

        $data = Blog::find($id);
        $data->update([
        ]);
        // $data->update($request->all());
        // dd($data);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('blog/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('sponsor')->with('success', 'Berhasil Di Update');
    }

    public function deletesponsor($id)
    {
        $data = Blog::find($id);
        $data->delete();
        return redirect()->route('sponsor')->with('success', 'Berhasil Di Hapus');
    }


    //////////////////////////////-----------------------VIDEOPROFILE---------------------/////////////////////////
    public function videoprofil()
    {
        $data = videoprofil::all();
        return view('Admin.beranda.videoprofile.videoprofil', compact('data'));
    }
    public function editvideo($id)
    {
        $data = videoprofil::findOrFail($id);
        return view('Admin.beranda.videoprofile.editvideoprofil', compact('data'));
    }
    public function updatevideo(Request $request, $id)
    {
        $data = videoprofil::find($id);
        $data->update([
            'judul' => $request->judul,
            'link' => $request->link,
            'deskripsi' => $request->deskripsi,

        ]);
        // $data->update($request->all());
        // dd($data);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('videoprofil/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('videoprofil')->with('success', 'Berhasil Di Update');
    }

    public function deletevideo($id)
    {
        $data = videoprofil::find($id);
        $data->delete();
        return redirect()->route('videoprofil')->with('success', 'Berhasil Di Hapus');
    }

}
