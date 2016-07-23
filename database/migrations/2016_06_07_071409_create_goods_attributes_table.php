<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('goods_attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
            $table->string('value',255);
            $table->decimal('price',10,2)->nullable();
            $table->string('image',255)->nullable();
            $table->integer('attributes_id')->unsigned();
            $table->foreign('attributes_id')->references('id')->on('attributes');
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
        Schema::drop('goods_attributes');
    }
}
