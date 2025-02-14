<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Locataire>
 */
class LocataireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lastname' => fake()->lastname(),
            'firstname' => fake()->firstname(),
            'mail' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'postal_code' => fake()->postcode(),
            'country' => fake()->country(),
            'numberbank' => fake()->iban(),
            'user_id' => 1
        ];
    }
}
