<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatadosenKinerjaforums extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datadosen_kinerjaforums', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kinerjaforums_id')->unsigned();
            $table->foreign('kinerjaforums_id')->references('id')->on('kinerjaforums')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('datadosen_kinerjaforums');
    }
}
