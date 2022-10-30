<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PokemonSeeder extends Seeder
{
    public function run()
    {
        $pokemons = [
            [
                'name' => 'Bulbasaur',
                'type' => 'grass',
                'hp' => 45,
                'agility' => 45,
                'attack' => 49.2,
                'defense' => 57.88
            ],
            [
                'name' => 'Charmander',
                'type' => 'fire',
                'hp' => 39,
                'agility' => 65,
                'attack' => 52.4,
                'defense' => 43.2
            ],
            [
                'name' => 'Squirtle',
                'type' => 'water',
                'hp' => 44,
                'agility' => 43,
                'attack' => 48.8,
                'defense' => 65.2
            ]
        ];

        foreach ($pokemons as $pokemon) {
            Pokemon::create($pokemon);
        }
    }
}
