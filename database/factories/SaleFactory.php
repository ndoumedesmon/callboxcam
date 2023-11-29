<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->word();
        return [
            'posname' => $this->faker->word(),
            'city' => $this->faker->word(),
            'longitude' => $this->faker->randomFloat('8',0,2),
            'latitude' => $this->faker->randomFloat('8',0,2),
        ];
    }
}
