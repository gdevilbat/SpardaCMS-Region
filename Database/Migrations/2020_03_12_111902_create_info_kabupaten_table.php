<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoKabupatenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_kabupaten', function (Blueprint $table) {
            $table->char('id_kabupaten', 4)->primary();
            $table->string('nama_kabupaten', 30);
            $table->char('provinsi_id', 2);
        });

        Schema::table('info_kabupaten', function($table){
            $table->foreign('provinsi_id')->references('id_provinsi')->on('info_provinsi')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_kabupaten');
    }
}
