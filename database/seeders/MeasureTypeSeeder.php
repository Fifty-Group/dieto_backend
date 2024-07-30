<?php

namespace Database\Seeders;

use App\Models\V1\MeasureType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MeasureTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = config('projectDefaultValues.measure_types');
        foreach ($permissions as $permission) {
            if (!MeasureType::where('title' , json_encode($permission))->exists()) MeasureType::create(['title' => json_encode($permission)]);
        }
    }
}
