<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        $permissions = [
            [
                'name' => 'index employees',
            ],
            [
                'name' => 'create employees',
            ]
        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission['name']
            ]);
        }

        Role::create(['name' => 'Super Admin'])->givePermissionTo(Permission::all());
        Role::create(['name' => 'Demo'])->givePermissionTo(Permission::all());

        Role::create(['name' => 'Human Resource Development'])
            ->givePermissionTo([
                'index employees',
                'create employees',
            ]);

        Role::create(['name' => 'Employee']);
    }
}