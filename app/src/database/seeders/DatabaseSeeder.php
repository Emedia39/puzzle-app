<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\User;
use App\Models\Item;
use App\Models\StageCell;
use App\Models\Stage;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //データベースでいうINSERT INTO　items、それをまとめてるところ

        // User::factory(10)->create();

        $this->call(AccountsTableSeeder::class);//管理者ログイン用アカウント
        $this->call(ItemsTableSeeder::class);//ゲーム内アイテム
        $this->call(UsersTableSeeder::class);//ゲーム内ユーザー
        $this->call(UserItemsTableSeeder::class);//ゲーム内ユーザーが所持しているアイテム

        $this->call(StageCellsTableSeeder::class);//
        $this->call(StagesTableSeeder::class);//
    }
}
