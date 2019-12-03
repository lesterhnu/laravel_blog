<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("title",50)->comment("标题");
            $table->string("sub_title",50)->comment("副标题");
            $table->string("author",20)->comment("作者");
            $table->text("content")->comment("正文");
            $table->string("url",100)->comment("地址")->default("");
            $table->smallInteger("type")->default(1)->comment("类型");
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
        Schema::dropIfExists('article');
    }
}
