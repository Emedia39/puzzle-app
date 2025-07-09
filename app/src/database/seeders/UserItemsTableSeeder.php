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
            'user_id' => 1,//ユーザー名と
            'item_id' => 2,//ユーザーが所持しているアイテム名
            'amount' => 1 //個数
        ]);
        UserItem::create([
            'user_id' => 2,//ユーザー名と
            'item_id' => 1,//ユーザーが所持しているアイテム名
            'amount' => 2 //個数
        ]);
        UserItem::create([
            'user_id' => 3,//ユーザー名と
            'item_id' => 3,//ユーザーが所持しているアイテム名
            'amount' => 3 //個数
        ]);
    }
}
/*
$table->id();
$table->string('user_name', 255);//IDのプレイヤー名
$table->string('item_name', 255);//所持アイテム名
*/
