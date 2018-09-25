<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatadosenHki extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datadosen_hki', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hki_id')->unsigned();
            $table->foreign('hki_id')->references('id')->on('hki')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('datadosen_id')->unsigned();
            $table->foreign('datadosen_id')->references('id')->on('dtdosen')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datadosen_hki');
    }
}
