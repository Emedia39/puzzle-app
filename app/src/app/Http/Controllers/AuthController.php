<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
//一覧を返す
    public function index(Request $request)
    {
        return view('auth/index');
        # return view('accounts/login', ['error_id' => $request->error_id]);
    }

    //※リダイレクトの方法
    //laravelではheaderは使わず、Controllerでredirectをreturnする。
    public function login(Request $request)
    {

        $validated = $request->validate([
            'name' => ['required', 'min:4', 'max:20'],
            'password' => ['required']
        ]);

        if ($request['name'] === 'jobi' && $request['password'] === 'jobi') {
            return redirect('accounts/index');
        } elseif ($request['name'] === 'Emedia' && $request['password'] === 'Emedia') {
            return redirect('accounts/index');
        } else {
            return redirect('accounts/login');
        }

    }

    public function logout(Request $request)
    {
        return redirect('login');
    }

}
