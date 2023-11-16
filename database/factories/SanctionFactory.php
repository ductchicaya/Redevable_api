<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sanction>
 */
class SanctionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dateSanction' => $this->faker->date(),
            'montantSanction' => $this->faker->numerify('#########'),
            'infraction_id' => rand(1, 10),
            'releve_declaratif_id' => rand(1, 10),
        ];
    }
}
