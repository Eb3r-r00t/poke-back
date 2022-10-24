<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $guards = config('auth.guards');

        foreach ($guards as $guardName => $guard) {
            // users
            Permission::create(['name' => 'view users', 'guard_name' => $guardName]);
            Permission::create(['name' => 'create users', 'guard_name' => $guardName]);
            Permission::create(['name' => 'update users', 'guard_name' => $guardName]);
            Permission::create(['name' => 'delete users', 'guard_name' => $guardName]);

            // brands
            Permission::create(['name' => 'view brands', 'guard_name' => $guardName]);
            Permission::create(['name' => 'create brands', 'guard_name' => $guardName]);
            Permission::create(['name' => 'update brands', 'guard_name' => $guardName]);
            Permission::create(['name' => 'delete brands', 'guard_name' => $guardName]);

            // product categories
            Permission::create(['name' => 'view product categories', 'guard_name' => $guardName]);
            Permission::create(['name' => 'create product categories', 'guard_name' => $guardName]);
            Permission::create(['name' => 'update product categories', 'guard_name' => $guardName]);
            Permission::create(['name' => 'delete product categories', 'guard_name' => $guardName]);

            // products
            Permission::create(['name' => 'view products', 'guard_name' => $guardName]);
            Permission::create(['name' => 'create products', 'guard_name' => $guardName]);
            Permission::create(['name' => 'update products', 'guard_name' => $guardName]);
            Permission::create(['name' => 'delete products', 'guard_name' => $guardName]);

            // product configs
            Permission::create(['name' => 'view product configs', 'guard_name' => $guardName]);
            Permission::create(['name' => 'create product configs', 'guard_name' => $guardName]);
            Permission::create(['name' => 'update product configs', 'guard_name' => $guardName]);
            Permission::create(['name' => 'delete product configs', 'guard_name' => $guardName]);
        }
    }
}
