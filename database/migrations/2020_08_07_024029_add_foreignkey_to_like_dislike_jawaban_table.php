<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyToLikeDislikeJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('like_dislike_jawaban', function (Blueprint $table) {
            $table->foreignId('profil_id')->constrained('users');
            $table->foreignId('jawaban_id')->constrained('jawaban');

            $table->primary(['profil_id','jawaban_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('like_dislike_jawaban', function (Blueprint $table) {
            $table->dropPrimary(['profil_id','jawaban_id']);

            $table->dropForeign(['jawaban_id']);
            $table->dropColumn(['jawaban_id']);

            $table->dropForeign(['profil_id']);
            $table->dropColumn(['profil_id']);
        });
    }
}
