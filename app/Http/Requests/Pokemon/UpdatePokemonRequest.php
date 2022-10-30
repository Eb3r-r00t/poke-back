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
            'image' => 'sometimes|url',
            'hp' => 'sometimes|integer|min:0|max:100',
            'agility' => 'sometimes|integer|min:0|max:100',
            'attack' => 'sometimes|numeric|min:0|max:100',
            'defense' => 'sometimes|numeric|min:0|max:100'
        ];
    }
}
