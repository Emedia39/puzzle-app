<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{//アイテムコントロール
    public function index(Request $request)
    {//アイテム一覧

        //テーブルの全てのレコードを取得
        $items = Item::All();

        return view('items/index', ['items' => $items]);

    }

    public function create(Request $request)
    {//アイテム作成処理
        return view('items/create', ['Request' => $request]);
    }

    public function store(Request $request)
    {//アイテム登録処理

        //レコードを追加(insert)
        //Item::create(['name' => 'drug02', 'type' => 3, 'effect' => 3, 'detail' => '敵単体に防御力ダウン']);//引数に連想配列
        Item::create([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'effect' => $request->input('effect'),
            'detail' => $request->input('detail'),
        ]);//引数に連想配列

        //return redirect('items/register');
        return redirect()->route('item.register', ['name' => $request->name]);
    }

    public function register(Request $request)
    {//アイテム登録確認画面

        return view('items/register', ['name' => $request->name]);

        //'register' => $register,
        //'register' => $register,
        //return redirect()->rote('register', ['register' => $register]);
    }

    public function confirmDestroy(Request $request)
    {//アイテム破壊処理
        $item = Item::findOrFail($request->id);
        return view('items/confirm_destroy', ['item' => $item]);
    }

    public function delete(Request $request)
    {//アイテム削除処理
        //idで検索後にレコードを削除 (delete)
        $item = Item::findOrFail($request->id);
        $item->delete();

        return redirect()->route('items.deleted', ['name' => $request->name]);
    }

    public function deleted(Request $request)
    {//アイテム削除確認画面
        return view('items/deleted', ['name' => $request->name]);
    }

    public function confirmUpdate(Request $request)
    {//アイテム破壊処理
        $item = Item::findOrFail($request->id);
        return view('items/confirm_update', ['item' => $item]);
    }

    public function change(Request $request)
    {//アイテム削除処理
        // idで検索後にレコードを更新 (update)
        $item = Item::findOrFail($request->id);
        $item->name = $request->input('name');
        $item->type = $request->input('type');
        $item->effect = $request->input('effect');
        $item->detail = $request->input('detail');

        $item->save();

        return redirect()->route('items.changed', ['name' => $request->name]);
    }

    public function changed(Request $request)
    {//アイテム削除確認画面
        return view('items/changed', ['name' => $request->name]);
    }

}
