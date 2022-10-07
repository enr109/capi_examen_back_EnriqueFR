<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\user_domicilio>
 */
class User_domicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'domicilio' => fake()->address(),
            'numero_exterior' => fake()->buildingNumber(),
            'colonia' => fake()->streetAddress(),
            'cp' => fake()->postcode(),
            'ciudad' => fake()->city(),
            'user_id' => User::inRandomOrder()->first()->id
            
        ];
    }
}
