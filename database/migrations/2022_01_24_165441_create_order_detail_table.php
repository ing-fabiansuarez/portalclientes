<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_detail', function (Blueprint $table) {
            $table->id('id_orderdetails')->autoIncrement();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('products_id');
            $table->unsignedBigInteger('references_id');
            $table->unsignedBigInteger('sizes_id');
            $table->integer('quantity_orderdetail');
            $table->integer('price_orderdetails');
            $table->string('observation_orderdetails');
            $table->string('horma_orderdetails',50);
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
        Schema::dropIfExists('order_detail');
    }
}
