<?php

namespace Database\Factories;

use App\Models\Redevable;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RedevableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Redevable::class;

    public function definition(): array
    {
        return [
            'raisonSociale' => fake()->company,
            'telephone' => fake()->phoneNumber,
            'dateCreation' => $this->faker->dateTimeBetween("1990-01-01", "2017-12-30"),
            'numeroImmatriculationRccm' => $this->faker->isbn13(),
            'adresse' => $this->faker->address,
            'quartier' => $this->faker->city,
            'ville' => $this->faker->country,
            'codePostal' => $this->faker->numerify('#-###'),
            'responsable_redevable_id' => rand(1, 10),
            'type_redevable_id' => rand(1, 2),
        ];
    }
}
