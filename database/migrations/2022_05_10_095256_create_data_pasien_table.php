<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pasien', function (Blueprint $table) {
            $table->id();

            $table->string('NIK',16);
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->tinyInteger('jenis_kelamin');
            $table->integer('umur');
            $table->string('perkerjaan', 50)->nullable();
            $table->longText('alamat');
            $table->string('nomor_telepon');
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
        Schema::dropIfExists('data_pasien');
    }
}
