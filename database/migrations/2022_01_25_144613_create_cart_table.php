<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->id()->autoIncrement();
            //reference foreing key
            $table->unsignedBigInteger('reference_id');
            $table->foreign('reference_id')->references('id')->on('references');
            //sizes
            $table->unsignedBigInteger('size_id');
            $table->foreign('size_id')->references('id')->on('sizes');
            //horma
            $table->unsignedBigInteger('horma_id');
            $table->foreign('horma_id')->references('id')->on('horma');
            //observation
            $table->unsignedBigInteger('observation_id');
            $table->foreign('observation_id')->references('id')->on('observation');
            //quantity
            $table->integer('quantity_cart');
            //user_id
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            //sold out
            $table->boolean('sold_out_cart');

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
        Schema::dropIfExists('cart');
    }
}
