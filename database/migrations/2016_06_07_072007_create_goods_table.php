<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('image',255);
            $table->string('depict',100)->nullable();
            $table->decimal('discount_price',10,2);
            $table->decimal('cost_price',10,2);
            $table->string('suggest',255);
            $table->text('desc');
            $table->string('keyword',50);
            $table->string('describe',255);
            $table->integer('questions')->default(0);
            $table->integer('comments')->default(0);
            $table->integer('stocks')->unsigned()->default(0);
            $table->boolean('is_star')->default(0);
            $table->string('slogan',50)->nullable();
            $table->integer('categorys_id')->unsigned();
            $table->foreign('categorys_id')->references('id')->on('categorys');
            $table->integer('brands_id')->unsigned();
            $table->foreign('brands_id')->references('id')->on('brands');
            $table->integer('machines_id')->unsigned();
            $table->foreign('machines_id')->references('id')->on('machines');
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
        Schema::drop('goods');
    }
}
