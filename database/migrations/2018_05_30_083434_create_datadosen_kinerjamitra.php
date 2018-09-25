<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatadosenKinerjamitra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datadosen_kinerjamitra', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kinerjamitra_id')->unsigned();
            $table->foreign('kinerjamitra_id')->references('id')->on('kinerjamitra')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('datadosen_id')->unsigned();
            $table->foreign('datadosen_id')->references('id')->on('datadosen')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datadosen_kinerjamitra');
    }
}
