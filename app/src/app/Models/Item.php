<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    use HasFactory;

    protected $guarded =
        [
            'id' => 1,
            [
                'type' => 1,//種類
                'effect' => 1,//,効果
                'detail' => '味方全員の攻撃力アップ'//詳細
            ],
            2,
            [
                'type' => 1,//種類
                'effect' => 2,//,効果
                'detail' => '自身の防御力アップ'//詳細
            ],
            3,
            [
                'type' => 2,//種類
                'effect' => 3,//,効果
                'detail' => '敵全体にレベルダウン'//詳細
            ],
            4,
            [
                'type' => 0,//種類
                'effect' => 0,//,効果
                'detail' => 'このバトルから逃げる！'//詳細
            ]
        ];

}
