<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPemeriksaanIdColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('nota_detail_pemeriksaan' , function(Blueprint $table){
            $table->unsignedBigInteger('pemeriksaan_id');
            $table->foreign('pemeriksaan_id')->references('id')->on('pemeriksaan');
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
        Schema::table('nota_detail_pemeriksaan' , function (Blueprint $table){
            $table->dropForeign(['pemeriksaan_id']);
            $table->dropColumn('pemeriksaan_id');
        });
    }
}
