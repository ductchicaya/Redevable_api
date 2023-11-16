<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ResponsableRedevable>
 */
class ResponsableRedevableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->lastName,
            'prenom' => fake()->firstName,
            'telephone' => fake()->phoneNumber,
            'cni' => $this->faker->numerify('###-###-##'),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
