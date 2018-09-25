<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatadosenNonditlitabmas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datadosen_nonditlitabmas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nonditlitabmas_id')->unsigned();
            $table->foreign('nonditlitabmas_id')->references('id')->on('nonditlitabmas')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('datadosen_id')->unsigned();
            $table->foreign('datadosen_id')->references('id')->on('dtdosen')->onDelete('cascade')->onUpdate('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('datadosen_nonditlitabmas');
    }
}
