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
        Schema::create('sejarahsingkats', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('isi_artikel');
            $table->string('judul_fotoside');
            $table->string('foto_side');
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
        Schema::dropIfExists('sejarahsingkats');
    }
};
