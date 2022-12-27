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
            Artikel::class,
            Bimbingankarir::class,
            BKK::class,
            blog::class,
            dharma::class,
            ekstra::class,
            guru::class,
            Jmlpemegang::class,
            jurusan::class,
            kakomli::class,
            kategoriblog::class,
            kegiatan_bkk::class,
            kepsek::class,
            keunggulan::class,
            login::class,
            lowongankerja::class,
            lowongankerja::class,
            LSP::class,
            Modul::class,
            perusahaan_mitra::class,
            prestasi::class,
            profilsekolah::class,
            profilvisimisi::class,
            Reparasibengkel::class,
            sejarahsingkat::class,
            sekolahadiwiyata::class,
            sekolahrujukan::class,
            sidestruktur::class,
            Skematerlisensi::class,
            slider::class,
            Sosmed::class,
            sponsor::class,
            strukturbkk::class,
            strukturorganisasi::class,
            Tempatujikom::class,
            totalsiswa::class,
            umkm_pasangan::class,
            videoprofil::class,
            visimisibkk::class,
            Visimisilsp::class,
            walas::class,
        ]);
    }
}
