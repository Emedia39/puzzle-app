<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        //
        //テーブルの全てのレコードを取得
        $users = User::All();
        //テーブルのレコード数を取得
        $count = User::count();
        //idで検索,見つからなかったら404エラー
        $user = User::findOrFail(1);

        //テーブルの全てのレコードを取得
        $items = User::All();
        return view('users/index', ['users' => $users]);

    }

}
