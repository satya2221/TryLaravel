<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomenJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komen_jawaban', function (Blueprint $table) {
            $table->id();
            $table->string('isi');
            $table->date('tanggal_buat');
//            $table->bigInteger('profil_id');
////            $table->foreign('profil_id')->references('id')->on('users');
//            $table->bigInteger('jawaban_id');
//            $table->foreign('jawaban_id')->references('id')->on('jawaban');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komen_jawaban');
    }
}
