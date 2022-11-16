<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function jurusan()
    {
        return view("landingpage.jurusan.jurusan");
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

    public function visimisi()
    {
        return view("landingpage.profile.visimisi");
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
    public function guru()
    {
        return view("landingpage.beranda.guru&staf");
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


    //===ROUTE BURSA KERJA KHUSUS===//
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
    public function kewirausahaan_bkk()
    {
        return view("landingpage.BKK.kewirausahaan_bkk");
    }
    public function lowongan_kerja()
    {
        return view("landingpage.BKK.lowongan_kerja");
    }
    public function bimbingan_karir()
    {
        return view("landingpage.BKK.bimbingan_karir");
    }

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
        return view('landingpage.Data.Ekstrakulikuler');
    }
    public function prestasi(){
        return view('landingpage.Data.prestasi');
    }
    public function detailekstra(){
        return view('landingpage.Data.detailekstra');
    }
}
