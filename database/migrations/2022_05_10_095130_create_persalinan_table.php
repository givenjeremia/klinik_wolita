<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersalinanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persalinan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_masuk');
            $table->date('tanggal_persalinan');
            $table->string('nama_suami');
            $table->string('perkerjaan_suami')->nullable();
            $table->integer('persalinan_ke');
            $table->tinyInteger('status_melahirkan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persalinan');
    }
}
