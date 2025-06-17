<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function index(Request $request)
    {
        //
        //テーブルの全てのレコードを取得
        $items = Item::All();
        //テーブルのレコード数を取得
        $count = Item::count();
        //idで検索,見つからなかったら404エラー
        $item = Item::findOrFail(1);

        //テーブルの全てのレコードを取得
        $items = Item::All();

        //dd($items);

        return view('items/index', ['items' => $items]);

    }
}
