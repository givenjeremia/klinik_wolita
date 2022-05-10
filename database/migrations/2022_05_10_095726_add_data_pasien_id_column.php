<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataPasienIdColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //Pemeriksaan
        Schema::table('pemeriksaan' , function(Blueprint $table){
            $table->unsignedBigInteger('data_pasien_id');
            $table->foreign('data_pasien_id')->references('id')->on('data_pasien');
        });
        //Persalinan
        Schema::table('persalinan' , function(Blueprint $table){
            $table->unsignedBigInteger('data_pasien_id');
            $table->foreign('data_pasien_id')->references('id')->on('data_pasien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        //Pemeriksaan
        Schema::table('pemeriksaan' , function (Blueprint $table){
            $table->dropForeign(['data_pasien_id']);
            $table->dropColumn('data_pasien_id');
        });
        //Persalinan
        Schema::table('persalinan' , function (Blueprint $table){
            $table->dropForeign(['data_pasien_id']);
            $table->dropColumn('data_pasien_id');
        });
    }
}
