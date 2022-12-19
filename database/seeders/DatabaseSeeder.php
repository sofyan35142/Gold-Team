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
            // blog::class,
            dharma::class,
            ekstra::class,
            guru::class,
            Jmlpemegang::class,
            jurusan::class,
            kakomli::class,
            // kepsek::class,
            LSP::class,
            prestasi::class,
            profilsekolah::class,
            profilvisimisi::class,
            // Skematerlisensi::class,
            slider::class,
            strukturorganisasi::class,
            sekolahadiwiyata::class,
            sekolahrujukan::class,
            Tempatujikom::class,
            totalsiswa::class,
            videoprofil::class,
            Visimisilsp::class,
            Modul::class,
            Artikel::class,
            kategoriblog::class,
            // walas::class,
            Reparasibengkel::class,
            strukturbkk::class,
            sidestruktur::class,
<<<<<<< HEAD
            keunggulan::class
=======
            sejarahsingkat::class,
            visimisibkk::class,
>>>>>>> f629c2da7737c3647c25c887e393f1727ad4d088
        ]);
    }
}
