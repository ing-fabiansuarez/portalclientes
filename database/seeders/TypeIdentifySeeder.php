<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeIdentifySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_identify')->insert([
            'name' => 'CEDULA DE CIUDADANIA',
            'abb' => 'CC',
            'active' => true,
        ]);
        DB::table('type_identify')->insert([
            'name' => 'NUMERO DE IDENTIFICACION TRIBUTARIA',
            'abb' => 'NIT',
            'active' => true,
        ]);
        DB::table('type_identify')->insert([
            'name' => 'CEDULA DE EXTRANJERIA',
            'abb' => 'CE',
            'active' => false,
        ]);
    }
}
