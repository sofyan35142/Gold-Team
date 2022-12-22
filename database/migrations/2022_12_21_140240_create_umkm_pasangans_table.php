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
        Schema::create('umkm_pasangan', function (Blueprint $table) {
            $table->id();
            $table->string("nama_umkm");
            $table->string("bidang");
            $table->string("alamat");
            $table->string("pemilik");
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
        Schema::dropIfExists('umkm_pasangan');
    }
};
