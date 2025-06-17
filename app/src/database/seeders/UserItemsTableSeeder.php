<?php

namespace Database\Seeders;

use App\Models\UserItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        UserItem::create([
            'user_id' => 'user01',//ユーザー名と
            'item_id' => 'medicine02',//ユーザーが所持しているアイテム名
        ]);
        UserItem::create([
            'user_id' => 'user02',//ユーザー名と
            'item_id' => 'medicine01',//ユーザーが所持しているアイテム名
        ]);
        UserItem::create([
            'user_id' => 'user03',//ユーザー名と
            'item_id' => 'drug01',//ユーザーが所持しているアイテム名
        ]);
    }
}
/*
$table->id();
$table->string('user_name', 255);//IDのプレイヤー名
$table->string('item_name', 255);//所持アイテム名
*/
