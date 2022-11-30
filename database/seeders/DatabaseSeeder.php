<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;



use Database\Seeders\LSP;
use Database\Seeders\kakomli;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
<<<<<<< HEAD
            jurusan::class,
            profilvisimisi::class,
            strukturorganisasi::class,
            dharma::class,
            kepsek::class,
            kakomli::class,
            profilsekolah::class,
            sekolahadiwiyata::class,
            totalsiswa::class,
            slider::class,
            blog::class,
            alumni::class,
            guru::class
=======
            alumni::class,
            blog::class,
            dharma::class,
            ekstra::class,
            guru::class,
            Jmlpemegang::class,
            jurusan::class,
            kakomli::class,
            kepsek::class,
            LSP::class,
            prestasi::class,
            profilsekolah::class,
            profilvisimisi::class,
            Skematerlisensi::class,
            slider::class,
            strukturorganisasi::class,
            Tempatujikom::class,
            totalsiswa::class,
            videoprofil::class,
            Visimisilsp::class,
            
>>>>>>> c621696fe8011080ab8f4e75a7c707b1a9c13a64
        ]);
    }
}
