<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'Alpargatas',
            'code'=>'01',
        ]);
        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'clasicas',
            'code'=>'01.aa',
        ]);
        DB::table('categories')->insert([
            'id' => 5,
            'name' => 'plataformas',
            'code'=>'01.ab',
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'Ropa',
            'code'=>'02',
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'Cosmeticos',
            'code'=>'03',
        ]);
    }
}
