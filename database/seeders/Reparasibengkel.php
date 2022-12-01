<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Reparasibengkel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reparasibengkels')->insert([
            'namabuku' => 'New Step 1 Toyota',
            'link' => 'https://smkn1sukorejo.sch.id/wp-content/uploads/2020/08/New-Step-1-Toyota.pdf',
            'foto' => 'buku.jpg',
        ]);

        DB::table('reparasibengkels')->insert([
            'namabuku' => 'Toyota Seri 5-K',
            'link' => 'https://smkn1sukorejo.sch.id/wp-content/uploads/2020/08/Toyota-Seri-5-K.pdf',
            'foto' => 'buku.jpg',
        ]);
    }
}
