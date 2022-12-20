<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bimbingankarir extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bimbingankarirs')->insert([
            'foto' => 'wasap.png',
            'judul' => 'FORUM TANYA JAWAB BIMBINGAN KERJA',
            'link' => 'https://api.whatsapp.com/send?phone=6285234792445&amp;text=Assalamualaikum.%20Saya%20ingin%20menanyakan%20beberapa%20hal%20terkait%20bimbingan%20kerja.%20Mohon%20bantuannya!',
            
        ]);

        DB::table('bimbingankarirs')->insert([
            'foto' => 'bkk.png',
            'judul' => 'APLIKASI BURSA KERJA KHUSUS',
            'link' => 'https://api.whatsapp.com/send?phone=6285234792445&amp;text=Assalamualaikum.%20Saya%20ingin%20menanyakan%20beberapa%20hal%20terkait%20bimbingan%20kerja.%20Mohon%20bantuannya!',

        ]);
        DB::table('bimbingankarirs')->insert([
            'foto' => 'bkk.png',
            'judul' => 'APLIKASI BURSA KERJA KHUSUS',
            'link' => 'https://api.whatsapp.com/send?phone=6285234792445&amp;text=Assalamualaikum.%20Saya%20ingin%20menanyakan%20beberapa%20hal%20terkait%20bimbingan%20kerja.%20Mohon%20bantuannya!',

        ]);
    }
}
