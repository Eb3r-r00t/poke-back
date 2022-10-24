<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = User::factory([
            'name' => 'Super Admin',
            'email' => 'superadmin@email.com',
        ])->create();

        $superAdmin->assignRole('Super Admin');

        $admin = User::factory([
            'name' => 'Admin',
            'email' => 'admin@email.com',
        ])->create();

        $admin->assignRole('Admin');

        $support = User::factory([
            'name' => 'Support',
            'email' => 'support@email.com',
        ])->create();

        $support->assignRole('Support');
    }
}
