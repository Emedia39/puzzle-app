<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Barryvdh\Debugbar\Facades\Debugbar;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use Illuminate\Http\Request;
use function Laravel\Prompts\password;

class AccountController extends Controller
{
    //一覧を表示する
    public function index(Request $request)
    {
        $title = 'アカウント一覧';
        $date = [
            [
                'name' => 'テストさん',
                'password' => '$3$3kdiei2',
            ],
            [
                'name' => '<h1>jobi</h1>',
                'password' => '$9$s#2kdie',
            ]
        ];

        //dd();
        Debugbar::info('情報表示');
        Debugbar::info('警告');
        Debugbar::info('エラーなう');

        //return view('accounts/index', ['title' => $title, 'accounts' => $date]);


        //テーブルの全てのレコードを取得
        $accounts = Account::All();
        //テーブルのレコード数を取得
        $count = Account::count();
        //idで検索,見つからなかったら404エラー
        $account = Account::findOrFail(1);
        //条件を指定して取得
        $account = Account::where('name', '=', 'jobi')->get();
        //複数の条件を指定して取得
        $account = Account::where('name', '=', 'jobi')
            ->where('created_at', '>=', '2024-06-08')
            ->get();

        //テーブルの全てのレコードを取得
        $accounts = Account::All();
        return view('accounts/index', ['accounts' => $date, 'title' => $title]);
        //accounts/indexに$accountsと$titleを送る
    }

    //一覧を返す
    public function Login(Request $request)
    {
        return view('accounts/login');
        # return view('accounts/login', ['error_id' => $request->error_id]);
    }

    //※リダイレクトの方法
    //laravelではheaderは使わず、Controllerでredirectをreturnする。
    public function doLogin(Request $request)
    {

        $validated = $request->validate([
            'name' => ['required', 'min:4', 'max:20'],
            'password' => ['required']
        ]);

        if ($request['name'] === 'jobi' && $request['password'] === 'jobi') {
            return redirect('accounts/index');
        } else {
            return redirect('accounts/login');
        }

    }
}
