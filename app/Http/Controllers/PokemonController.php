<?php

namespace App\Http\Controllers;

use App\Http\Requests\Pokemon\CreatePokemonRequest;
use App\Http\Requests\Pokemon\UpdatePokemonRequest;
use App\Services\PokemonService;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function __construct(private readonly PokemonService $pokemonService)
    {
    }

    public function getAll(){
        return $this->pokemonService->getAll();
    }

    public function getOne($id){
        return $this->pokemonService->getOne($id);
    }

    public function create(CreatePokemonRequest $request){
        return $this->pokemonService->create($request);
    }

    public function update(UpdatePokemonRequest $request, $id){
        return $this->pokemonService->update($request, $id);
    }

    public function delete($id){
        return $this->pokemonService->delete($id);
    }
}
