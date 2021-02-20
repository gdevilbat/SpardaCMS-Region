<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoKecamatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_kecamatan', function (Blueprint $table) {
            $table->char('id_kecamatan', 7)->primary();
            $table->string('nama_kecamatan', 30);
            $table->char('kabupaten_id', 4);
        });

        Schema::table('info_kecamatan', function($table){
            $table->foreign('kabupaten_id')->references('id_kabupaten')->on('info_kabupaten')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_kecamatan');
    }
}
