<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    protected $table = 'pokemons';

    protected $fillable = [
        'name',
        'type',
        'hp',
        'image',
        'agility',
        'attack',
        'defense'
    ];

    protected $casts = [
        'attack' => 'float',
        'defense' => 'float'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
