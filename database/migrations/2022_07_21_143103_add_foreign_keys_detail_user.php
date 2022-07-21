<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_user', function (Blueprint $table) {
            $table->foreign('users_id', 'fk_detail_user_to_users')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->foreign('study_program_id', 'fk_detail_user_to_study_program')->references('id')->on('study_program')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_user', function (Blueprint $table) {
            $table->dropForeign('fk_detail_user_to_users');

            $table->dropForeign('fk_detail_user_to_study_program');
        });
    }
};
