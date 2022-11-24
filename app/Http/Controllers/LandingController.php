<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ekstra;
use App\Models\Guru;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use App\Models\profilvisimisi;

class LandingController extends Controller
{
    public function beranda()
    {
        $data=Blog::all();
        return view("landingpage.beranda.beranda", compact('data'));
    }

    public function create()
    {
        //
    }

    public function jurusan()
    {
        $data = Jurusan::all();
        return view("landingpage.jurusan.jurusan", compact('data'));
    }
    public function detailjurusan($id)
    {

        $data = Jurusan::find($id);

        return view("landingpage.jurusan.detailjurusan", compact('data'));
    }
    public function tkr()
    {
        return view("landingpage.jurusan.tkr");
    }
    public function tei()
    {
        return view("landingpage.jurusan.tei");
    }
    public function rpl()
    {
        return view("landingpage.jurusan.rpl");
    }
    public function tki()
    {
        return view("landingpage.jurusan.tki");
    }
    public function tav()
    {
        return view("landingpage.jurusan.tav");
    }
    public function modulproduktiftkr()
    {
        return view("landingpage.jurusan.modulproduktiftkr");
    }
    public function reparasibengkel()
    {
        return view("landingpage.jurusan.reparasibengkel");
    }
    public function modulproduktiftei()
    {
        return view("landingpage.jurusan.modulproduktiftei");
    }
    public function modulproduktifrpl()
    {
        return view("landingpage.jurusan.modulproduktifrpl");
    }
    public function artikelilmiah()
    {
        return view("landingpage.jurusan.artikelilmiah");
    }
    public function modulproduktiftki()
    {
        return view("landingpage.jurusan.modulproduktiftki");
    }
    public function modulproduktiftav()
    {
        return view("landingpage.jurusan.modulproduktiftav");
    }

    ////LSP////
    public function lsp()
    {
        return view("landingpage.lsp.lsp");
    }
    public function visimisilsp()
    {
        return view("landingpage.lsp.visimisilsp");
    }
    public function skematerlisensi()
    {
        return view("landingpage.lsp.skematerlisensi");
    }
    public function tempatujikom()
    {
        return view("landingpage.lsp.tempatujikom");
    }
    public function jmlpemegangsertifikat()
    {
        return view("landingpage.lsp.jmlpemegangsertifikat");
    }

    //start profil Sekolah
    public function profil()
    {
        return view("landingpage.profile.profil");
    }
    public function visimisi()
    {
        // $data =profilvisimisi::all();
        return view("landingpage.profile.visimisi",compact('data'));
    }

    public function strukturorganisasi()
    {
        return view("landingpage.profile.strukturorganisasi");
    }
    public function sejarahsingkat()
    {
        return view("landingpage.profile.sejarahsingkat");
    }
    public function sekolahadiwiyata()
    {
        return view("landingpage.profile.sekolahadiwiyata");
    }
    public function sekolahrujukan()
    {
        return view("landingpage.profile.sekolahrujukan");
    }
    //end profil sekolah

    public function guru()
    {
        $data=Guru::all();
        return view("landingpage.beranda.guru&staf", compact('data'));
    }

    public function keahlian()
    {
        return view("landingpage.beranda.keahlian");
    }
    public function lokerbkk()
    {
        return view("landingpage.beranda.lokerbkk");
    }
    public function agenda()
    {
        return view("landingpage.beranda.agenda");
    }


    //start bkk
    public function bkk()
    {
        return view("landingpage.BKK.bkk");
    }
    public function visimisi_bkk()
    {
        return view("landingpage.BKK.visimisi_bkk");
    }
    public function strukturorganisasi_bkk()
    {
        return view("landingpage.BKK.strukturorganisasi_bkk");
    }
    public function kegiatan_bkk()
    {
        return view("landingpage.BKK.kegiatan_bkk");
    }
    public function detail_kegiatan_bkk()
    {
        return view("landingpage.BKK.detail.kegiatan_bkk");
    }
    public function kewirausahaan_bkk()
    {
        return view("landingpage.BKK.kewirausahaan_bkk");
    }
    public function lowongan_kerja()
    {
        return view("landingpage.BKK.lowongan_kerja");
    }
    public function detail_lowongan()
    {
        return view("landingpage.BKK.detail.detaillowongan");
    }
    public function bimbingan_karir()
    {
        return view("landingpage.BKK.bimbingan_karir");
    }
    public function perusahaan_mitra()
    {
        return view("landingpage.BKK.perusahaan_mitra");
    }
    //end BKK

    //Alumni
    public function testimonialumni()
    {
        return view("landingpage.alumni.testialumni");
    }
        public function profilealumni(){
        return view('landingpage.alumni.profilealumni');
    }

    //Data
        public function dharma(){
        return view('landingpage.Data.dharmawanita');
    }
    public function datawalas(){
        return view('landingpage.Data.datawalas');
    }
    public function ekstra(){
        $data=ekstra::all();
        return view('landingpage.Data.Ekstrakulikuler', compact('data'));
    }
    public function prestasi(){
        return view('landingpage.Data.prestasi');
    }
    public function detailekstra(){
        return view('landingpage.Data.detailekstra');
    }
    public function detailprestasi(){
        return view('landingpage.Data.detailprestasi');
    }

    public function agendadetail(){
        return view('landingpage.beranda.detailagenda');
    }

    public function blogbanyak(){
        return view ('landingpage.beranda.bloglebihbanyak');
    }
}
