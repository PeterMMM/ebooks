<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRankingBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ranking_books', function (Blueprint $table) {
            $table->id();
            $table->integer('measure_time')->comment("0=>month, 1=>year");
            $table->integer('book_id');
            $table->integer('ranking_no');
            $table->date('measure_start_date');
            $table->date('measure_end_date');
            $table->integer('rank_type')->comment('0=>view, 1=>download, 2=like');
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
        Schema::dropIfExists('ranking_books');
    }
}
