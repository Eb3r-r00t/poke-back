<?php

namespace Tests\Feature;

use App\Models\Pokemon;
use App\Models\User;
use Database\Seeders\PermissionSeeder;
use Database\Seeders\RoleSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PokemonTest extends TestCase
{
    use refreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed([
            PermissionSeeder::class,
            RoleSeeder::class
        ]);
        $user = User::factory()->create();
        $user->assignRole('Super Admin');
        $this->actingAs($user, 'user');
    }

    public function test_can_see_all_pokemons()
    {
        Pokemon::factory()->count(5)->create();
        $response = $this->get('api/v1/pokemons');

        $response->assertStatus(200);
        $this->assertCount(5, $response->json());
    }

    public function test_can_see_one_pokemon()
    {
        $pokemon = Pokemon::factory()->create();
        $response = $this->get('api/v1/pokemons/' . $pokemon->id);

        $response->assertStatus(200);
        $this->assertEquals($pokemon->name, $response->json('name'));
    }

    public function test_can_create_a_pokemon()
    {
        $pokemon = [
            'name' => 'Bulbasaur',
            'type' => 'grass',
            'image' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/1.png',
            'hp' => 45,
            'agility' => 45,
            'attack' => 49.2,
            'defense' => 57.88
        ];

        $response = $this->postJson('/api/v1/pokemons', $pokemon);

        $response->assertStatus(201);
        $response->assertJsonFragment($pokemon);

        $this->assertDatabaseCount('pokemons', 1);
        $this->assertDatabaseHas('pokemons', $pokemon);
    }

    public function test_can_update_a_pokemon()
    {
        $pokemon = Pokemon::factory([
            'name' => 'Charmander',
            'type' => 'fire',
            'hp' => 1,
            'agility' => 1,
            'attack' => 1.2,
            'defense' => 1.88
        ])->create();

        $updatePokemon = [
            'name' => 'Bulbasaur',
            'type' => 'grass',
            'hp' => 45,
            'agility' => 45,
            'attack' => 49.2,
            'defense' => 57.88
        ];

        $response = $this->putJson('/api/v1/pokemons/' . $pokemon->id, $updatePokemon);

        $response->assertStatus(200);
        $response->assertJsonFragment($updatePokemon);

        $this->assertDatabaseCount('pokemons', 1);
        $this->assertDatabaseHas('pokemons', $updatePokemon);
    }

    public function test_can_delete_a_pokemon()
    {
        $pokemon = Pokemon::factory([
            'name' => 'Charmander',
            'type' => 'fire',
            'hp' => 1,
            'agility' => 1,
            'attack' => 1.2,
            'defense' => 1.88
        ])->create();

        $response = $this->deleteJson('/api/v1/pokemons/' . $pokemon->id);

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'name' => 'Charmander',
            'type' => 'fire',
            'hp' => 1,
            'agility' => 1,
            'attack' => 1.2,
            'defense' => 1.88
        ]);

        $this->assertDatabaseCount('pokemons', 0);
        $this->assertDatabaseMissing('pokemons', $pokemon->toArray());
    }

}
