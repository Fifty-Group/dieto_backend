<?php

namespace Database\Seeders;

use App\Models\V1\MenuType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = config('projectDefaultValues.menu_types');
        foreach ($data as $item) {
            if (!MenuType::where('title', json_encode($item['title']))->exists()) MenuType::create(['title' =>json_encode( $item['title']), 'time_from' => $item['time']['from'], 'time_to' => $item['time']['to']]);
        }
    }
}
