<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyToKomenJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('komen_jawaban', function (Blueprint $table) {
            $table->foreignId('profil_id')->constrained('users');

            $table->foreignId('jawabannya')->constrained('jawaban');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('komen_jawaban', function (Blueprint $table) {
            $table->dropForeign(['jawabannya']);
            $table->dropColumn(['jawabannya']);

            $table->dropForeign(['profil_id']);
            $table->dropColumn(['profil_id']);
        });
    }
}
