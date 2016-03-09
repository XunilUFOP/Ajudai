<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReply extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('replies', function (Blueprint $table) {
            $table->unsignedInteger('id', $autoincrement = true);
            $table->unsignedInteger('post_id');
            $table->unsignedInteger('author_id');
            $table->text('body');
            $table->integer('votes');
            $table->timestamps();

            // contraint
            $table->foreign('author_id')->references('id')->on('users');
            $table->foreign('post_id')->references('id')->on('posts');
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
        Schema::drop('replies');
    }
}
