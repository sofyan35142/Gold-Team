<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;



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
            jurusan::class,
            profilvisimisi::class,
            strukturorganisasi::class,
            dharma::class,
            kepsek::class,
            kakomli::class
        ]);
    }
}
