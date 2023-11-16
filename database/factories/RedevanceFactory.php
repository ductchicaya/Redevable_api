<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Redevance>
 */
class RedevanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => fake()->name,
            'taux' => fake()->numerify('###'),
            'dateEcheance' => fake()->dateTimeBetween("1980-01-01", "2001-12-30")
        ];
    }
}
