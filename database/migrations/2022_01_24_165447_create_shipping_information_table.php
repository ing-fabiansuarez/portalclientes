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
            $table->unsignedBigInteger('city_idcity');
            $table->string('adress_shipping_info',50);
            $table->string('neighborhood_shipping_info',50);
            $table->string('name',50);
            $table->string('surname',50);
            $table->unsignedBigInteger('type_identify_shipping_info');
            $table->foreign('type_identify_shipping_info')->references('id')->on('type_identify');
            $table->integer('identify_number_shipping_info');
            $table->integer('phone_shipping_info');
            $table->string('email_shipping_info',50);
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
