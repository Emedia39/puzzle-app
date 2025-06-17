<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use App\Models\UserItem;
use Illuminate\Http\Request;

class UserItemController extends Controller
{
    //
    public function index(Request $request)
    {
        //
        //テーブルの全てのレコードを取得
        $user_items = User::All();
        //テーブルのレコード数を取得
        $count = User::count();
        //idで検索,見つからなかったら404エラー
        $user_item = User::findOrFail(1);

        //テーブルの全てのレコードを取得
        $items = User::All();
        return view('user_items/index', ['user_items' => $user_items]);
    }
}
