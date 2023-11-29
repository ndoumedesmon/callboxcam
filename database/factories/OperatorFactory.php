<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OperatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'operatorName' => $this -> faker -> word(),
            'op_API' => $this -> faker -> boolean(),
            'created_at'=> now()
        ];
    }
}
