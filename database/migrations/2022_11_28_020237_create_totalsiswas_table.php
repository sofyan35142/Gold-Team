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
        Schema::create('totalsiswas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('laki_laki');
            $table->string('perempuan');
            $table->string('total_siswa');
            $table->string('guru');
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
        Schema::dropIfExists('totalsiswas');
    }
};
