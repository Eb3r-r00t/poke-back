<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pokemon>
 */
class PokemonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'type' => $this->faker->randomElement(['fire', 'water', 'grass']),
            'hp' => $this->faker->randomNumber(),
            'agility' => $this->faker->randomNumber(),
            'attack' => $this->faker->randomFloat(),
            'defense' => $this->faker->randomFloat(),
        ];
    }
}
