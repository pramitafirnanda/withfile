<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTersandarisasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kinerjatersandarisasi', function (Blueprint $table) {
            $table->increments('id');
            $table->text('produk');
            $table->string('standarisasi');
            $table->string('dokumen');

            $table->unsignedInteger('tahun_id')->nullable();
            $table->foreign('tahun_id')->references('id')->on('tahun_kegiatan')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('kinerjatersandarisasi');
    }
}
