<?php

namespace Database\Seeders;

use App\Models\Images;
use App\Models\Reference;
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
        $references = Reference::factory(200)->create();

        foreach ($references as $reference) {
            Images::factory(1)->create([
                'imageable_id' => $reference->id,
                'imageable_type' => Reference::class
            ]);
        }
    }
}
