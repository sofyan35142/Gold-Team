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
        Schema::create('layananortus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->string('kelas');
            $table->bigInteger('id_jurusan');
            $table->string('nama_ortu');
            $table->string('no_telp');
            $table->string('email');
            $table->string('unit_tujuan');
            $table->string('saran');
            $table->string('solusi');
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
        Schema::dropIfExists('layananortus');
    }
};
