<?php

namespace App\Services;

use App\Models\Pokemon;

class DashboardService
{
    public function dashboardData()
    {
        // get all pokemons
        $pokemons = Pokemon::all();

        // get the pokemon with the highest hp
        $highestHp = Pokemon::orderBy('hp', 'desc')->first();
        $highestAgility = Pokemon::orderBy('agility', 'desc')->first();
        $highestAttack = Pokemon::orderBy('attack', 'desc')->first();
        $highestDefense = Pokemon::orderBy('defense', 'desc')->first();

        return [
            'highestHp' => $highestHp,
            'highestAgility' => $highestAgility,
            'highestAttack' => $highestAttack,
            'highestDefense' => $highestDefense,
        ];
    }
}
