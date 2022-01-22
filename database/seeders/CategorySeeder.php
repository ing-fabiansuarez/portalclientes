<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
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
            'id' => 2,
            'name' => 'Ropa',
            'code'=>'02',
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'Cosmeticos',
            'code'=>'03',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 1,
            'imageable_type' => Category::class,
            'url' => 'categories/1.jpg',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 2,
            'imageable_type' => Category::class,
            'url' => 'categories/2.jpg',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 1,
            'imageable_type' => Category::class,
            'url' => 'categories/1.jpg',
        ]);
    }
}
