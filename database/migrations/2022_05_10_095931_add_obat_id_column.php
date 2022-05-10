<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddObatIdColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('nota_detail_persalinan' , function(Blueprint $table){
            $table->unsignedBigInteger('obat_id');
            $table->foreign('obat_id')->references('id')->on('obat');
        });
        Schema::table('nota_detail_pemeriksaan' , function(Blueprint $table){
            $table->unsignedBigInteger('obat_id');
            $table->foreign('obat_id')->references('id')->on('obat');
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
        Schema::table('nota_detail_persalinan' , function (Blueprint $table){
            $table->dropForeign(['obat_id']);
            $table->dropColumn('obat_id');
        });
        Schema::table('nota_detail_pemeriksaan' , function (Blueprint $table){
            $table->dropForeign(['obat_id']);
            $table->dropColumn('obat_id');
        });
    }
}
