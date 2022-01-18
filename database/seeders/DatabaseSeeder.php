<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Reference;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TypeIdentifySeeder::class);
        $this->call(RolesSeeder::class);
        Product::factory(30)->create();
        Reference::factory(200)->create();
    }
}
