<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPersalinanIdColumn extends Migration
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
            $table->unsignedBigInteger('persalinan_id');
            $table->foreign('persalinan_id')->references('id')->on('persalinan');
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
            $table->dropForeign(['persalinan_id']);
            $table->dropColumn('persalinan_id');
        });
    }
}
