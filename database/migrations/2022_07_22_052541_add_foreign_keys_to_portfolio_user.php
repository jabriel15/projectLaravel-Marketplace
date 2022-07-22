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
        Schema::table('portfolio_user', function (Blueprint $table) {
            $table->foreign('detail_user_id', 'fk_portfolio_user_to_detail_user')->references('id')->on('detail_user')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('portfolio_user', function (Blueprint $table) {
            $table->dropForeign('fk_portfolio_user_to_detail_user');
        });
    }
};
