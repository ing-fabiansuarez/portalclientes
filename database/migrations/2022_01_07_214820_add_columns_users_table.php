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
                ->after('name')->nullable();
            $table->unsignedBigInteger('type_identify_id')
                ->after('surname')->nullable();
            $table->foreign('type_identify_id')->references('id')->on('type_identify');
            $table->string('identify_number')
                ->after('type_identify_id')->nullable();
            $table->unsignedBigInteger('rol_id')
                ->after('identify_number')->nullable();
            $table->foreign('rol_id')->references('id')->on('roles');
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
