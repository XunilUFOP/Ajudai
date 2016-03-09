<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('posts', function (Blueprint $table) {
            $table->unsignedInteger('id', $autoincrement = true);
            $table->unsignedInteger('author_id');
            $table->unsignedInteger('category_id');
            //$table->integer('subcategory_id');
            $table->string('title', 55);
            $table->text('body');
            $table->string('tags', 100);
            $table->unsignedTinyInteger('closed');
            $table->timestamps();

            // constraint
            $table->foreign('author_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('posts');
    }
}
