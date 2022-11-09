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

    public function store(Request $request)
    {
        //
    }

    public function show(Jurusan $jurusan)
    {
        //
    }

    public function edit(Jurusan $jurusan)
    {
        //
    }

    public function update(Request $request, Jurusan $jurusan)
    {
        //
    }

    public function destroy(Jurusan $jurusan)
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

}
