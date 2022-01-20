<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Reference;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ReferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $references = Reference::factory(20)->create();
        foreach ($references as $reference) {
            Image::factory(1)->create([
                'imageable_id' => $reference->id,
                'imageable_type' => Reference::class,
                'url' => 'references/' . $faker->image('public/storage/references', 640, 480, null, false),
            ]);
        }
    }
}
