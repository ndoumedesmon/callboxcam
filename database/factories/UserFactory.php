<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    

    public function definition()
    {
        $user = User::find(1) ;
        
        return [
            'username' => $this->faker->word(),
            'email' => $this->faker->unique()->safeEmail(),
            'role' => $this->faker->word(),
            'password' => Hash::make('password'), // password
            'remember_token' =>Str::random(10),
            'parent_id' => $user ? $user->id :Null
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                
                'email_verified_at' => null,
            ];
        });
    }
}
