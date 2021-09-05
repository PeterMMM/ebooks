<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturedBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('featured_books', function (Blueprint $table) {
            $table->id();
            $table->integer('book_id');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->integer('status')->default(1)->comment('0=>hide, 1=>show');
            $table->integer('page_id')->comment('0=>home page, 1=>detail page, 2=>categories, 3=>authors')->default(0);
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
        Schema::dropIfExists('featured_books');
    }
}
