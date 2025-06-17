<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'user01',//ユーザー名
            'level' => 5,//レベル
            'experience' => 250,//経験値
        ]);
        User::create([
            'name' => 'user02',//ユーザー名
            'level' => 35,//レベル
            'experience' => 1750,//経験値
        ]);
        User::create([
            'name' => 'user03',//ユーザー名
            'level' => 99,//レベル
            'experience' => 4950,//経験値
        ]);
    }
}
/*
$table->string('name', 255);//プレイヤー名
$table->integer('level');//レベル
$table->integer('experience');//経験値
*/
