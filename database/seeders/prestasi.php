<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class prestasi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prestasis')->insert([
            'nama_lomba' => 'LKBB TINGKAT PASURUAN ',
            'nama_pemenang' => 'PASKIBRA(PASKETSU)',
            'deskripsi' => 'Sketsu kembali menorehkan prestasi di tingkat Nasional. Prestasi kali ini sangat membanggakan karena mokleters berhasil memborong juara 1, 2 & 3 bidang lomba desain UI pada Irestech Fun Competition yang diselenggarakan oleh Universitas Brawijaya . Berikut adalah ',
            'foto' => 'paskib.jpeg',
        ]);
        DB::table('prestasis')->insert([
            'nama_lomba' => 'VOLLY (YUDARTA CHAMPIONSHIP) ',
            'nama_pemenang' => 'VOLLY SKETSU',
            'deskripsi' => 'Sketsu kembali menorehkan prestasi di tingkat Nasional. Prestasi kali ini sangat membanggakan karena Sketsu berhasil memborong juara 1, 2 & 3 bidang lomba desain UI pada Irestech Fun Competition yang diselenggarakan oleh Universitas Brawijaya . Berikut adalah  ',
            'foto' => 'voli.jpeg',
        ]);
        DB::table('prestasis')->insert([
            'nama_lomba' => 'Pencak silat Tingkat Jatim ',
            'nama_pemenang' => 'Salsa Dkk',
            'deskripsi' => 'Sketsu kembali menorehkan prestasi di tingkat Nasional. Prestasi kali ini sangat membanggakan karena Sketsu berhasil memborong juara 1, 2 & 3 bidang lomba desain UI pada Irestech Fun Competition yang diselenggarakan oleh Universitas Brawijaya . Berikut adalah ',
            'foto' => 'silat.jpeg',
        ]);
    }
}
