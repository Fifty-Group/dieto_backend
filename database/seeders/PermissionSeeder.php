<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = config('projectDefaultValues.permissions');
        foreach ($permissions as $permission) {
            if (!Permission::where('name' , $permission)->exists()) Permission::create(['name' => $permission]);
        }
    }
}
