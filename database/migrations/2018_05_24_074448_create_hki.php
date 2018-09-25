<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHki extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hki', function (Blueprint $table) {
            $table->increments('id');
            $table->text('judul');
            $table->string('jenis');
            $table->string('nomor');
            $table->string('status');
            $table->string('hki');
            $table->string('dokumen');

            $table->unsignedInteger('periode_id')->nullable();
            $table->foreign('periode_id')->references('id')->on('periode')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('tahun_id')->nullable();
            $table->foreign('tahun_id')->references('id')->on('tahun_kegiatan')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hki');
    }
}
