<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Boxe>
 */
class BoxeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),  
            'address' => fake()->address(),
            'city' => fake()->city(),
            'postal_code' => fake()->postcode(),
            'country' => fake()->country(),
            'user_id' => random_int(1, 2)
        ];
    }
}
