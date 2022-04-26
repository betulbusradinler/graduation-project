<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogdetayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_detay', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('blog_id')->unsigned()->unique();
            $table->boolean('son_yazilar')->default(0);
            $table->boolean('popular_yazilar')->default(0);
            $table->boolean('en_cok_okunan')->default(0);
            $table->foreign('blog_id')->references('id')->on('blog')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_detay');
    }
}
