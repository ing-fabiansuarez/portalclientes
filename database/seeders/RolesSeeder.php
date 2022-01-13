<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'ADMINISTRADOR',
            'created_at'=>'2022-01-13 11:22:58',
            'updated_at'=>'2022-01-13 11:22:58'
        ]);
        DB::table('roles')->insert([
            'name' => 'DISTRIBUIDOR AUTORIZADO',
            'created_at'=>'2022-01-13 11:22:58',
            'updated_at'=>'2022-01-13 11:22:58'
        ]);
        DB::table('roles')->insert([
            'name' => 'MAYORISTA',
            'created_at'=>'2022-01-13 11:22:58',
            'updated_at'=>'2022-01-13 11:22:58'
        ]);
    }
}
