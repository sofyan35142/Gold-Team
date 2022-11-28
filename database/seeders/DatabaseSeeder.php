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
            kakomli::class,
<<<<<<< HEAD
            profilsekolah::class,
=======
            totalsiswa::class,
            slider::class,
            blog::class,
            alumni::class,
            guru::class
>>>>>>> 8187cf7d598339e7eabd3502124ddbbbdfd8d1d9
        ]);
    }
}
