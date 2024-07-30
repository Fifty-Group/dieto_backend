<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = config('projectDefaultValues.users');
        foreach ($users as $user) {
            if (!User::where('name', $user['name'])->exists()) {
                $newUser = User::create(['name' => $user['name'], 'password' => Hash::make($user['password']), 'username' => $user['username']]);
                $newUser->assignRole($user['roles']);
            }
        }
    }
}
