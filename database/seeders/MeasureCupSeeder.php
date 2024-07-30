<?php

namespace Database\Seeders;

use App\Models\V1\MeasureCup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MeasureCupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = config('projectDefaultValues.measure_cups');
        foreach ($permissions as $permission) {
            if (!MeasureCup::where('title' , json_encode($permission))->exists()) MeasureCup::create(['title' => json_encode($permission)]);
        }
    }
}
