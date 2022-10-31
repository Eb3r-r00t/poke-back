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
                'image' => 'https://img.pokemondb.net/sprites/black-white/anim/normal/bulbasaur.gif',
                'hp' => 45,
                'agility' => 45,
                'attack' => 49.2,
                'defense' => 57.88
            ],
            [
                'name' => 'Charmander',
                'type' => 'fire',
                'image' => 'https://img.pokemondb.net/sprites/black-white/anim/normal/charmander.gif',
                'hp' => 39,
                'agility' => 65,
                'attack' => 52.4,
                'defense' => 43.2
            ],
            [
                'name' => 'Squirtle',
                'type' => 'water',
                'image' => 'https://img.pokemondb.net/sprites/black-white/anim/normal/squirtle.gif',
                'hp' => 44,
                'agility' => 43,
                'attack' => 48.8,
                'defense' => 65.2
            ],
            [
                'name' => 'Pikachu',
                'type' => 'electric',
                'image' => 'https://img.pokemondb.net/sprites/black-white/anim/normal/pikachu.gif',
                'hp' => 35,
                'agility' => 90,
                'attack' => 55.2,
                'defense' => 40.8
            ],
            [
                'name' => 'Psyduck',
                'type' => 'psychic',
                'image' => 'https://img.pokemondb.net/sprites/black-white/anim/normal/psyduck.gif',
                'hp' => 50,
                'agility' => 55,
                'attack' => 52.4,
                'defense' => 48.8
            ],
            [
                'name' => 'Jynx',
                'type' => 'ice',
                'image' => 'https://img.pokemondb.net/sprites/black-white/anim/normal/jynx.gif',
                'hp' => 65,
                'agility' => 95,
                'attack' => 48.8,
                'defense' => 65.2
            ],
            [
                'name' => 'Dratini',
                'type' => 'dragon',
                'image' => 'https://img.pokemondb.net/sprites/black-white/anim/normal/dratini.gif',
                'hp' => 41,
                'agility' => 50,
                'attack' => 48.8,
                'defense' => 43.2
            ],
            [
                'name' => 'Houndour',
                'type' => 'dark',
                'image' => 'https://img.pokemondb.net/sprites/black-white/anim/normal/houndour.gif',
                'hp' => 45,
                'agility' => 65,
                'attack' => 52.4,
                'defense' => 48.8
            ],
            [
                'name' => 'Clefairy',
                'type' => 'fairy',
                'image' => 'https://img.pokemondb.net/sprites/black-white/anim/normal/clefairy.gif',
                'hp' => 70,
                'agility' => 35,
                'attack' => 48.8,
                'defense' => 65.2
            ],
            [
                'name' => 'Pidgey',
                'type' => 'normal',
                'image' => 'https://img.pokemondb.net/sprites/black-white/anim/normal/pidgey.gif',
                'hp' => 40,
                'agility' => 56,
                'attack' => 48.8,
                'defense' => 43.2
            ],
            [
                'name' => 'Machop',
                'type' => 'fighting',
                'image' => 'https://img.pokemondb.net/sprites/black-white/anim/normal/machop.gif',
                'hp' => 70,
                'agility' => 35,
                'attack' => 52.4,
                'defense' => 48.8
            ],
            [
                'name' => 'Zubat',
                'type' => 'flying',
                'image' => 'https://img.pokemondb.net/sprites/black-white/anim/normal/zubat.gif',
                'hp' => 40,
                'agility' => 55,
                'attack' => 48.8,
                'defense' => 43.2
            ],
            [
                'name' => 'Ekans',
                'type' => 'poison',
                'image' => 'https://img.pokemondb.net/sprites/black-white/anim/normal/ekans.gif',
                'hp' => 35,
                'agility' => 55,
                'attack' => 48.8,
                'defense' => 43.2
            ],
            [
                'name' => 'Sandshrew',
                'type' => 'ground',
                'image' => 'https://img.pokemondb.net/sprites/black-white/anim/normal/sandshrew.gif',
                'hp' => 50,
                'agility' => 40,
                'attack' => 48.8,
                'defense' => 65.2
            ],
            [
                'name' => 'Geodude',
                'type' => 'rock',
                'image' => 'https://img.pokemondb.net/sprites/black-white/anim/normal/geodude.gif',
                'hp' => 40,
                'agility' => 20,
                'attack' => 48.8,
                'defense' => 43.2
            ],
            [
                'name' => 'Caterpie',
                'type' => 'bug',
                'image' => 'https://img.pokemondb.net/sprites/black-white/anim/normal/caterpie.gif',
                'hp' => 45,
                'agility' => 45,
                'attack' => 48,
                'defense' => 43.2
            ],
            [
                'name' => 'Magnemite',
                'type' => 'steel',
                'image' => 'https://img.pokemondb.net/sprites/black-white/anim/normal/magnemite.gif',
                'hp' => 25,
                'agility' => 45,
                'attack' => 48.8,
                'defense' => 43.2
            ],
            [
                'name' => 'Gastly',
                'type' => 'ghost',
                'image' => 'https://img.pokemondb.net/sprites/black-white/anim/normal/gastly.gif',
                'hp' => 30,
                'agility' => 80,
                'attack' => 48.8,
                'defense' => 43.2
            ],
        ];

        foreach ($pokemons as $pokemon) {
            Pokemon::create($pokemon);
        }
    }
}
