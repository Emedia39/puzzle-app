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
        //テーブルの全てのレコードを取得
        $userItems = UserItem::All();

        return view('user_items/index', ['userItems' => $userItems]);
    }
}
