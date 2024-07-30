<?php

namespace Database\Seeders;

use App\Models\V1\ActivityType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = config('projectDefaultValues.activity_types');
        foreach ($permissions as $permission) {
            if (!ActivityType::where('title' , json_encode($permission['title']))->exists()) ActivityType::create(['title' => json_encode($permission['title']) , 'coefficient' => $permission['coefficient']]);
        }
    }
}
