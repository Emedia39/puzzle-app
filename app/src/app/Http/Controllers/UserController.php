<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Item;
use App\Models\Stage;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {

        //テーブルの全てのレコードを取得
        //$users = User::All();
        $users = User::simplePaginate(10);
        return view('users/index', ['users' => $users]);

    }

    public function individual(Request $request)
    {
        $user = User::findOrFail($request->id);

        return view('users/individual', ['user' => $user]);
    }

}
