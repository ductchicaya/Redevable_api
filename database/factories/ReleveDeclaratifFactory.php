<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReleveDeclaratif>
 */
class ReleveDeclaratifFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'moisRedevance' => $this->fake()->month,
            // 'anneeRedevance' => $this->fake()->year(),
            'volumeTransactionTotal' => fake()->numerify('###'),
            'montantRedevanceTotal' => fake()->numerify('#########'),
            'montantRedevanceEtatTotal' => $this->faker->numerify('#########'),
            'montantRedevanceArpceTotal' => $this->faker->numerify('#########'),
            'montantRedevanceArtfTotal' => $this->faker->numerify('#########'),
            'status' => rand(0, 1),
            'redevance_id' => rand(1, 2),
            'redevable_id' => rand(1, 8),
        ];
    }
}
