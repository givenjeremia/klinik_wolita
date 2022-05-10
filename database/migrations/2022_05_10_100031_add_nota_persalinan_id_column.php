<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNotaPersalinanIdColumn extends Migration
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
            $table->unsignedBigInteger('nota_id');
            $table->foreign('nota_id')->references('id')->on('nota_persalinan');
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
            $table->dropForeign(['nota_id']);
            $table->dropColumn('nota_id');
        });
        
    }
}
