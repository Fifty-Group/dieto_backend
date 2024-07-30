<?php

namespace Database\Seeders;

use App\Models\V1\MenuSize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = config('projectDefaultValues.menu_sizes');
        foreach ($data as $item) {
            if (!MenuSize::where('calories', $item['calories'])->exists()) MenuSize::create(['title' => $item['title'], 'calories' => $item['calories']]);
        }
    }
}
