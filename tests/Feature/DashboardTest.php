<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Seeders\PermissionSeeder;
use Database\Seeders\RoleSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardTest extends TestCase
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

    public function test_example()
    {
        $response = $this->get('/api/v1/dashboard');
        dd($response->json());
    }
}
