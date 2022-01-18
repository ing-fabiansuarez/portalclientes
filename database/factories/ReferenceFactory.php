<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReferenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'num_ref' => $this->faker->unique()->numberBetween(1, 999),
            'product_id' => Product::all()->random()->id,
            'name_ref' => $this->faker->word(15),
            'active_ref' => $this->faker->numberBetween(0, 1),
        ];
    }
}
