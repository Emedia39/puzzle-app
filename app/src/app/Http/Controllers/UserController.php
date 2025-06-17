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

        //テーブルの全てのレコードを取得
        $users = User::All();
        return view('users/index', ['users' => $users]);

    }

}
