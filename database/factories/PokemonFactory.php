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
            'image' => $this->faker->url,
            'hp' => $this->faker->randomNumber(3),
            'agility' => $this->faker->randomNumber(3),
            'attack' => $this->faker->randomFloat(2, 0, 999),
            'defense' => $this->faker->randomFloat(2, 0, 999),
        ];
    }
}
