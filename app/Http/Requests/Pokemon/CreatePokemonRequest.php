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
            'name' => 'required|string',
            'type' => [new Enum(PokemonTypes::class), 'required', 'string'],
            'hp' => 'required|integer',
            'agility' => 'required|integer',
            'attack' => 'required|numeric',
            'defense' => 'required|numeric'
        ];
    }
}
