<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Competition>
 */
class CompetitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'date' => $this->faker->date(),
            'location' => $this->faker->city(),
            'deelnemers' => $this->faker->numberBetween(1, 100),
        ];
    }
}
