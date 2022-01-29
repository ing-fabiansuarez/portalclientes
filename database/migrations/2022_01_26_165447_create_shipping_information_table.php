<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_information', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id_city')->on('city');
            $table->string('whatsapp_info_adress');
            $table->string('adress_shipping_info', 50);
            $table->string('neighborhood_shipping_info', 50);
            $table->double('cost_freight_infoadress');
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
        Schema::dropIfExists('shipping_information');
    }
}
