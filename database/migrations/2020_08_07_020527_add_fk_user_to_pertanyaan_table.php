<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkUserToPertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pertanyaan', function (Blueprint $table) {
            $table->foreignId('profil_id')->constrained('users');

            $table->foreignId('best_jawaban')->constrained('jawaban');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pertanyaan', function (Blueprint $table) {
            $table->dropForeign(['best_jawaban']);
            $table->dropColumn(['best_jawaban']);

            $table->dropForeign(['profil_id']);
        });
    }
}
