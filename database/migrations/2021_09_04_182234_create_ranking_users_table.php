<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRankingUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ranking_users', function (Blueprint $table) {
            $table->id();
            $table->integer('measure_time')->comment("0=>month, 1=>year");
            $table->integer('user_id');
            $table->integer('ranking_no');
            $table->date('measure_start_date');
            $table->date('measure_end_date');
            $table->integer('rank_type')->comment('0=>most active[view,download,like]')->default(0);
            $table->integer('by_admin_id');
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
        Schema::dropIfExists('ranking_users');
    }
}
