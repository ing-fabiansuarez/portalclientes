<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $products =  Product::factory(15)->create();
        foreach ($products as $product) {
            Image::factory(1)->create([
                'imageable_id' => $product->id,
                'imageable_type' => Product::class,
                'url' => 'products/' . $faker->image('public/storage/products', 640, 480, null, false),
            ]);
        }
    }
}
