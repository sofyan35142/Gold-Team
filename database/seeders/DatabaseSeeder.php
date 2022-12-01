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
<<<<<<< HEAD
            Modul::class,
=======
            Modultkr::class,
            kategoriblog::class,
            walas::class

>>>>>>> e5ac8ba1d2b9757f6bac3d5f2d5428dd8d155eca
        ]);
    }
}
