<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname')
            ->after('name');

            $table->unsignedBigInteger('type_identify_id')
            ->after('surname');
            $table->foreign('type_identify_id')->references('id')->on('type_identify');

            $table->unsignedBigInteger('phone_id')
            ->after('type_identify_id');
            $table->foreign('phone_id')->references('id')->on('phones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
