<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class jurusan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kakomlis')->insert([
            'nama_guru' => 'ROHMAD MUNANDAR, S.Pd',
            'id_jurusan' => '1',
            'deskripsi' => '<p>NIP &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 19740609 200902 1 002<br>Tempat/Tgl Lahir : Sukoharjo, 09 Juni 1974<br>Status &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : PNS<br>Gol. Ruang &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : III/b</p>',
            'foto' => 'rohmad.jpg',
        ]);
        DB::table('kakomlis')->insert([
             'nama_guru' => 'SOFAN DEDI PRINYATO, S.Pd., Gr',
            'id_jurusan' => '2',
            'deskripsi' => '<p>NIP &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 19890506 202221 1 009<br>Tempat/Tgl Lahir : Sidoarjo, 06 Mei 1989<br>Status &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : PPPK<br>Gol. Ruang &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: IX</p>',
            'foto' => 'sofan.jpeg',
        ]);
        DB::table('kakomlis')->insert([
            'nama_guru' => 'WIDYAWATI, S.Kom',
            'id_jurusan' => '3',
            'deskripsi' => '<p>NIP &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 19951227 201903 1 003<br>Tempat/Tgl Lahir : Pasuruan, 07 Agustus 1976<br>Status &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : PNS<br>Gol. Ruang &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : III/c</p>',
            'foto' => 'widya.jpg',
        ]);
        DB::table('kakomlis')->insert([
            'nama_guru' => 'HANIK MUALLIFAH, S.T',
            'id_jurusan' => '4',
            'deskripsi' => '<p>NIP &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 19750619 200904 2 001<br>Tempat/Tgl Lahir : Madiun, 19 Juni 1975<br>Status &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : PNS<br>Gol. Ruang &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: III/c</p>',
            'foto' => 'hanik.jpg',
        ]);
        DB::table('kakomlis')->insert([
            'nama_guru' => 'AGUNG KARUNIA ADI, S.T',
            'id_jurusan' => '5',
            'deskripsi' => '<p>NIP &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 19951227 201903 1 003<br>Tempat/Tgl Lahir : Banjarnegara, 27 Desember 1995<br>Status &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : PNS<br>Gol. Ruang &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : III/a</p>',
            'foto' => 'Agung.jpg',
        ]);
    }
}
