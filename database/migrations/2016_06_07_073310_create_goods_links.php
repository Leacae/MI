<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsLinks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_links', function (Blueprint $table) {
            $table->integer('goods_id')->unsigned();
            $table->integer('link_goods_id')->unsigned();
            $table->primary(['goods_id', 'link_goods_id']);
            $table->foreign('goods_id')->references('id')->on('goods');
            $table->foreign('link_goods_id')->references('id')->on('goods');
            $table->boolean('is_double')->default(0);
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
        Schema::drop('goods_links');
    }
}
