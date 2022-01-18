<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_product' => $this->faker->word(15),
            'active' => $this->faker->numberBetween(0, 1),
            'score' => rand(0, 1000)
        ];
    }
}
