<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatadosenDitlitabmas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datadosen_ditlitabmas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ditlitabmas_id')->unsigned();
            $table->foreign('ditlitabmas_id')->references('id')->on('ditlitabmas')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('datadosen_id')->unsigned();
            $table->foreign('datadosen_id')->references('id')->on('dtdosen')->onDelete('cascade')->onUpdate('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('datadosen_ditlitabmas');
    }
}
