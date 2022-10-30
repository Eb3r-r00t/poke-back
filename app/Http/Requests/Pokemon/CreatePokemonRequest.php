<?php

namespace App\Http\Requests\Pokemon;

use App\Enums\PokemonTypes;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class CreatePokemonRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name' => 'required|string|unique:pokemons,name|max:25',
            'type' => [new Enum(PokemonTypes::class), 'required', 'string'],
            'image' => 'required|url',
            'hp' => 'required|integer|min:0|max:100',
            'agility' => 'required|integer|min:0|max:100',
            'attack' => 'required|numeric|min:0|max:100',
            'defense' => 'required|numeric|min:0|max:100'
        ];
    }
}
