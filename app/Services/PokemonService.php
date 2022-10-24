<?php

namespace App\Services;

use App\Models\Pokemon;

class PokemonService
{
    public function getAll(){
        return Pokemon::all();
    }

    public function getOne($id){
        return Pokemon::findOrFail($id);
    }

    public function create($request){
        return Pokemon::create($request->all());
    }

    public function update($request, $id){
        $pokemon = $this->getOne($id);
        $pokemon->update($request->all());
        return $pokemon;
    }

    public function delete($id){
        $pokemon = $this->getOne($id);
        $pokemon->delete();
        return $pokemon;
    }

}
