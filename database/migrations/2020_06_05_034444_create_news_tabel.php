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
            $table->integer('dist_id');
            $table->integer('subdist_id')->nullable();
            $table->integer('user_id');
            $table->string('title');
            $table->string('image');
            $table->text('details');
            $table->string('video_link');
            $table->string('tags');
            $table->integer('top_section');
            $table->integer('big_thumbnail');
            $table->integer('small_thumbnail');
            $table->integer('notice');
            $table->integer('published');
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
