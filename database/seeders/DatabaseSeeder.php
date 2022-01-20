<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Reference;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('references');
        Storage::makeDirectory('references');
        Storage::makeDirectory('products');



        $this->call(TypeIdentifySeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ReferencesSeeder::class);
    }
}
