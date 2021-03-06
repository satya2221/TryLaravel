<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyToJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jawaban', function (Blueprint $table) {
            $table->foreignId('profil_id')->constrained('users');

            $table->foreignId('pertanyaanya')->constrained('pertanyaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jawaban', function (Blueprint $table) {
            $table->dropForeign(['pertanyaanya']);
            $table->dropColumn(['pertanyaanya']);

            $table->dropForeign(['profil_id']);
            $table->dropColumn(['profil_id']);
        });
    }
}
