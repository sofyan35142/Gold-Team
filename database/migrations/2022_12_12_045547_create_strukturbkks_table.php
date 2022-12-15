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
        Schema::create('strukturbkk', function (Blueprint $table) {
            $table->id();
            $table->string("foto_struktur");
            $table->text("isi_artikel");
            $table->string("nama_member")->nullable();
            $table->string("foto_member")->nullable();
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
        Schema::dropIfExists('strukturbkk');
    }
};
