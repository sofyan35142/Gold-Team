<?php

namespace App\Http\Controllers;

use App\Models\alumni;
use App\Models\Blog;
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
            $request->file('foto')->move('fotoblog/', $request->file('foto')->getClientOriginalName());
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
            $request->file('foto')->move('fotoekstra/', $request->file('foto')->getClientOriginalName());
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
}
