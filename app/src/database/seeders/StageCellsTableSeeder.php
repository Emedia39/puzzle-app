<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StageCell;

class StageCellsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        StageCell::create([
            'stage_id' => 1,//ステージID
            'x' => 0,//座標x
            'y' => 0,//座標y
            'object_id' => 1,//ステージ名
        ]);
        StageCell::create([
            'stage_id' => 1,//ステージID
            'x' => 0,//座標x
            'y' => 1,//座標y
            'object_id' => 2,//ステージ名
        ]);
        StageCell::create([
            'stage_id' => 1,//ステージID
            'x' => 1,//座標x
            'y' => 1,//座標y
            'object_id' => 3,//ステージ名
        ]);
        //
        StageCell::create([
            'stage_id' => 2,//ステージID
            'x' => 0,//座標x
            'y' => 0,//座標y
            'object_id' => 1,//ステージ名
        ]);
        StageCell::create([
            'stage_id' => 2,//ステージID
            'x' => 0,//座標x
            'y' => 1,//座標y
            'object_id' => 2,//ステージ名
        ]);
        StageCell::create([
            'stage_id' => 2,//ステージID
            'x' => 1,//座標x
            'y' => 1,//座標y
            'object_id' => 3,//ステージ名
        ]);
    }
}
