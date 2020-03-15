<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoKelurahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_kelurahan', function (Blueprint $table) {
            $table->char('id_kelurahan', 10)->primary();
            $table->string('nama_kelurahan', 100);
            $table->char('kode_pos', 5);
            $table->char('id_kecamatan', 7);
        });

        Schema::table('info_kelurahan', function($table){
            $table->foreign('id_kecamatan')->references('id_kecamatan')->on('info_kecamatan')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_kelurahan');
    }
}
