<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableDtdosen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtdosen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('nidn');
            $table->string('programstudi');
            $table->string('jk');
            $table->string('pendidikan');
            $table->string('jabatanfungsional');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dtdosen');
    }
}
