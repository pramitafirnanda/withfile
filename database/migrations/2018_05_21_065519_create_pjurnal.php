<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePjurnal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pjurnal', function (Blueprint $table) {
            $table->increments('id');
            $table->text('judul');
            $table->string('nama_jurnal');
            $table->string('issn');
            $table->string('volume');
            $table->string('nomor');

            $table->string('hal_start');
            $table->string('hal_end');
            $table->string('url');
            $table->string('dokumen');

            $table->unsignedInteger('periode_id')->nullable();
            $table->foreign('periode_id')->references('id')->on('periode')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('tahun_id')->nullable();
            $table->foreign('tahun_id')->references('id')->on('tahun_kegiatan')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::drop('pjurnal');
    }
}
