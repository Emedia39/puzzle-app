<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stage;

class StagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Stage::create([
            'name' => 'a',//ステージ名
        ]);
        Stage::create([
            'name' => 'b',//ステージ名
        ]);
    }
}
