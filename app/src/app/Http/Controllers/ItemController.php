<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function index(Request $request)
    {

        //テーブルの全てのレコードを取得
        $items = Item::All();

        return view('items/index', ['items' => $items]);

    }
}
