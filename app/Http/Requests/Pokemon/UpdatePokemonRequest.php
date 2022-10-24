<?php

namespace App\Http\Requests\Pokemon;

use App\Enums\PokemonTypes;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class UpdatePokemonRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name' => ['sometimes','string','unique:pokemons,name,'.$this->route('id')],
            'type' => [new Enum(PokemonTypes::class), 'sometimes', 'string'],
            'hp' => 'sometimes|integer',
            'agility' => 'sometimes|integer',
            'attack' => 'sometimes|numeric',
            'defense' => 'sometimes|numeric'
        ];
    }
}
