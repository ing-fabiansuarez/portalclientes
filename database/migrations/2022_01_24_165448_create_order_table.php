<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id('id_order')->autoIncrement();
            $table->date('date_order');
            $table->integer('products_total_price_order');
            $table->integer('shipping_price');
            $table->string('state_order',40);
            $table->string('consecutive_order',50);
            $table->unsignedBigInteger('shipping_info_id');
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
        Schema::dropIfExists('order');
    }
}
