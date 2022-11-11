<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class LandingController extends Controller
{
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
}
