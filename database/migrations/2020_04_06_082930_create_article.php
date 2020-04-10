<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::dropIfExists('articles');
        Schema::create('articles', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string("title",255);
            $table->text("content");
            $table->string("category",255);
            $table->text("slug");
            $table->text("imgurl");
            $table->bigInteger("user_id")->unsigned();
            $table->foreign("user_id")->references('id')->on('users');
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
        Schema::dropIfExists('articles');
    }
}
