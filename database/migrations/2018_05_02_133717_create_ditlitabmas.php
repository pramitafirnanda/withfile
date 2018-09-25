<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDitlitabmas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ditlitabmas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->string('bidang_penelitian');
            $table->string('dana');

            $table->string('hibah');
            $table->string('skema');

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
        Schema::drop('ditlitabmas');
    }
}
