<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNonditlitabmas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nonditlitabmas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('judul');
            $table->string('jenis_penelitian');

            $table->string('kategori_bidang_penelitian');
            $table->string('bidang_penelitian');

            $table->string('kategori_tujuan_sosial');
            $table->string('tujuan_sosial');

            $table->string('sumber_dana');
            $table->string('ins_sumber_dana');
            $table->string('jumlah_dana');

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
        Schema::drop('nonditlitabmas');
    }
}
