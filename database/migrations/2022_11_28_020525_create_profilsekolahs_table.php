<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profilsekolah', function (Blueprint $table) {
            $table->id();
            $table->string('foto_sekolah');
            $table->string('nama_sekolah');
            $table->integer('npsn');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('daerah');
            $table->string('provinsi');
            $table->integer('kode_pos');
            $table->string('alamat');
            $table->integer('no_telp');
            $table->string('email');
            $table->string('kegiatan_pembelajaran');
            $table->string('waktu_penyelenggaraan');
            $table->integer('jarak_ke_pusat_kecamatan');
            $table->integer('jarak_ke_pusat_daerah');
            $table->integer('tahun_berdiri');
            $table->string('penerbit_SK');
            $table->string('sk_pendirian_sekolah');
            $table->string('status_sekolah');
            $table->string('kurikulum');
            $table->string('status_bos');
            $table->string('sumber_listrik');
            $table->string('akses_internet');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profilsekolah');
    }
};
