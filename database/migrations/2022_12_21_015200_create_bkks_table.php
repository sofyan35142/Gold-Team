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
        Schema::create('bkks', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('sub_judul1');
            $table->string('foto1');
            $table->text('deskripsi');
            $table->string('sub_judul2');
            $table->string('foto2');
            $table->string('foto3');
            $table->string('foto4');
            $table->string('foto5')->nullable();
            $table->string('judul_sidebar');
            $table->string('foto6');
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
        Schema::dropIfExists('bkks');
    }
};
