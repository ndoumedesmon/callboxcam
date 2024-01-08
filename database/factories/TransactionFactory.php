<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums ;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $listType = ["depot","retrait"];
        return [
            'amount' => $this -> faker -> randomFloat(2),
            'type' => $this -> faker -> randomElement($listType),
            'destinator' => $this -> faker -> randomFloat(6),
            'created_at' => $this -> faker->dateTime()
        ];
    }
}
