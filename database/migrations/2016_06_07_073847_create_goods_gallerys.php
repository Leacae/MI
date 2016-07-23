<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsGallerys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_gallerys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img_url',255);
            $table->string('thumb_url',255);
            $table->string('big_url',255);
            $table->integer('goods_id')->unsigned();
            $table->foreign('goods_id')->references('id')->on('goods');
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
        Schema::drop('goods_gallerys');
    }
}
