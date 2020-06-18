<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cat_id');
            $table->integer('subcat_id')->nullable();
            $table->integer('dist_id')->nullable();
            $table->integer('subdist_id')->nullable();
            $table->integer('user_id');
            $table->string('title');
            $table->string('image_one');
            $table->text('details');
            $table->text('video_link')->nullable();
            $table->string('tags')->nullable();
            $table->integer('top_section')->nullable();
            $table->integer('big_thumbnail')->nullable();
            $table->integer('small_thumbnail')->nullable();
            $table->integer('notice')->nullable();
            $table->integer('published')->nullable();
            $table->string('post_date')->nullable();
            $table->string('post_month')->nullable();
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
        Schema::dropIfExists('news');
    }
}
