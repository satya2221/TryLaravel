<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyToLikeDislikePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('like_dislike_pertanyaan', function (Blueprint $table) {
            $table->foreignId('profil_id')->constrained('users');
            $table->foreignId('pertanyaan_id')->constrained('pertanyaan');

            $table->primary(['profil_id','pertanyaan_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('like_dislike_pertanyaan', function (Blueprint $table) {
            $table->dropPrimary(['profil_id','pertanyaan_id']);

            $table->dropForeign(['pertanyaan_id']);
            $table->dropColumn(['pertanyaan_id']);

            $table->dropForeign(['profil_id']);
            $table->dropColumn(['profil_id']);
        });
    }
}
