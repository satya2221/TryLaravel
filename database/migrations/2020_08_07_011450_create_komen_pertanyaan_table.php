<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomenPertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komen_pertanyaan', function (Blueprint $table) {
            $table->id();
            $table->string('isi');
            $table->date('tanggal_buat');
//            $table->bigInteger('profil_id');
//            $table->foreign('profil_id')->references('id')->on('users');
//            $table->bigInteger('pertanyaan_id');
//            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komen_pertanyaan');
    }
}
