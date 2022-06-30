<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaPersalinanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_persalinan', function (Blueprint $table) {
            $table->id();

            $table->date('tanggal');
            $table->integer('biaya_penanganan');
            $table->tinyInteger('jenis_pembayaran');
            $table->tinyInteger('status_pembayaran');
            $table->integer('lama_menginap');
            $table->integer('total')->length(100)->nullable();;

            $table->softDeletes();;

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
        Schema::dropIfExists('nota_persalinan');
    }
}
