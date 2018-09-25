<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengabdiannondrpm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengabdiannondrpm', function (Blueprint $table) {
            $table->increments('id');
            $table->text('judul');
            $table->string('dana');
            $table->string('program');
            $table->string('dokumen');
            $table->integer('p_mhs')->default(0);
            $table->integer('p_alumni')->default(0);
            $table->integer('p_staff')->default(0);

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
        Schema::drop('pengabdiannondrpm');
    }
}
