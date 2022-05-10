<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsernameColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Data Pasien
        Schema::table('data_pasien' , function(Blueprint $table){
            $table->string('username');
            // $table->unsignedBigInteger('username');
            $table->foreign('username')->references('username')->on('users');
        });
        //Pemeriksaan
        Schema::table('pemeriksaan' , function(Blueprint $table){
            $table->string('username')->constrained();
            // $table->unsignedBigInteger('username');
            $table->foreign('username')->references('username')->on('users');
        });
        //Persalinan
        Schema::table('persalinan' , function(Blueprint $table){
            $table->string('username');
            $table->foreign('username')->references('username')->on('users');

            $table->string('dokter_bidan');
            $table->foreign('dokter_bidan')->references('username')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Data Pasien
        Schema::table('data_pasien' , function (Blueprint $table){
            $table->dropForeign(['username']);
            $table->dropColumn('username');
        });
        //Pemeriksaan
        Schema::table('pemeriksaan' , function (Blueprint $table){
            $table->dropForeign(['username']);
            $table->dropColumn('username');
        });
        //Persalinan
        Schema::table('persalinan' , function (Blueprint $table){
            $table->dropForeign(['username']);
            $table->dropColumn('username');

            $table->dropForeign(['dokter_bidan']);
            $table->dropColumn('dokter_bidan');
        });
    }
}
