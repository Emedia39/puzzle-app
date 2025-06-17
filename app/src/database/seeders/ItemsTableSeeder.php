<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Item::create([
            'name' => 'medicine01',//アイテム名
            'type' => 1,//種類
            'effect' => 4,//効果値
            'detail' => '味方単体に攻撃力上昇'//詳細
        ]);
        Item::create([
            'name' => 'medicine02',//アイテム名
            'type' => 2,//種類
            'effect' => 2,//効果値
            'detail' => '味方全体に防御力上昇'//詳細
        ]);
        Item::create([
            'name' => 'drug01',//アイテム名
            'type' => 4,//種類
            'effect' => 1,//効果値
            'detail' => '敵全体にレベル低下'//詳細
        ]);
        Item::create([
            'name' => 'special01',//アイテム名
            'type' => 0,//種類
            'effect' => 0,//効果値
            'detail' => 'このバトルから逃亡する'//詳細
        ]);
    }
}
/*$table->string('name', 255);//アイテム名
$table->integer('type');//種類(int)
$table->integer('effect');//効果値(int)
$table->string('detail', 255);//詳細*/
