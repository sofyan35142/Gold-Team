<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function viewblog(){

        $data=Blog::all();
        return view('Admin.beranda.blog', compact('data'));
    }

    public function tambahblog(){
        return view('Admin.beranda.tambahblog');
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
        return view('Admin.beranda.editblog', compact('data'));
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


}
