<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = config('projectDefaultValues.roles');
        foreach ($roles as $role => $rolePermissions) {
            if (!Role::where('name', $role)->exists()) {
                $newRole = Role::create(['name' => $role]);
                $newRole->syncPermissions($rolePermissions);
            }
        }
    }
}
