<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create(['name' => 'Super Admin']);

        Role::create(['name' => 'Admin'])->givePermissionTo([
            'view brands',
            'create brands',
            'update brands',
            'delete brands',
        ]);

        Role::create(['name' => 'Support'])->givePermissionTo([
        ]);
    }
}
