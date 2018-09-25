<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatadosenPengabdiandrpm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datadosen_pengabdiandrpm', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pengabdiandrpm_id')->unsigned();
            $table->foreign('pengabdiandrpm_id')->references('id')->on('pengabdiandrpm')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::drop('datadosen_pengabdiandrpm');
    }
}
