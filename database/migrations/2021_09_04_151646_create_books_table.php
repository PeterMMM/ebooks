<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('file_name');
            $table->string('download_url');
            $table->string('ref_download_url')->nullable();
            $table->integer('view_count')->default(0);
            $table->smallInteger('author_id')->default(0);
            $table->smallInteger('category_id')->default(0);
            $table->smallInteger('sub_category_id')->default(0);
            $table->integer('comment_count')->default(0);
            $table->integer('by_admin_id')->default(0)->comment('0=>not register,1=>uploaded_admin_id');
            $table->integer('download_count')->default(0);
            $table->integer('status')->default(1)->comment('0=>hide,1=>show');
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
        Schema::dropIfExists('books');
    }
}
