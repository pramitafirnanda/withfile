<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableIlmuKepakaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bidangilmu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kategoriBidangIlmu');
            $table->string('bidangIlmu');
            $table->string('kategoriKepakaran');
            $table->string('kepakaran');

            $table->unsignedInteger('dosen_id')->nullable();
            $table->foreign('dosen_id')->references('id')->on('dtdosen')
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
        Schema::drop('bidangilmu');
    }
}
