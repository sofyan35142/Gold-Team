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
            Bimbingankarir::class,
            BKK::class,
            blog::class,
            dharma::class,
            ekstra::class,
            guru::class,
            Jmlpemegang::class,
            jurusan::class,
            kegiatan_bkk::class,
            kakomli::class,
            kepsek::class,
            LSP::class,
            prestasi::class,
            profilsekolah::class,
            profilvisimisi::class,
            // Skematerlisensi::class,
            slider::class,
            Sosmed::class,
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
            walas::class,
            Reparasibengkel::class,
            strukturbkk::class,
            sidestruktur::class,
            sejarahsingkat::class,
            visimisibkk::class,
            lowongankerja::class,
<<<<<<< HEAD
            lowongankerja::class,
=======
            perusahaan_mitra::class,
            umkm_pasangan::class,
>>>>>>> 097029ef2913d09ee27a73043582d19937ba84bd
            keunggulan::class
        ]);
    }
}
