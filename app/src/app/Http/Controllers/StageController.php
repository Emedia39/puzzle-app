<?php

namespace App\Http\Controllers;

use App\Models\Stage;
use App\Models\User;
use Illuminate\Http\Request;

class StageController extends Controller
{
    //
    public function index(Request $request)
    {
        //テーブルの全てのレコードを取得
        $stages = Stage::All();
        return view('stage/index', ['stages' => $stages]);
    }


    public function confirmUpdate(Request $request)
    {//アイテム変更処理
        $stage = Stage::findOrFail($request->id);
        return view('stages/confirm_update', ['stage' => $stage]);
    }

    public function change(Request $request)
    {//アイテム変更処理
        // idで検索後にレコードを更新 (update)
        $stage = Stage::findOrFail($request->id);
        $stage->name = $request->input('name');
        $stage->type = $request->input('type');
        $stage->effect = $request->input('effect');
        $stage->detail = $request->input('detail');

        $stage->save();

        return redirect()->route('stages.changed', ['name' => $request->name]);
    }

    public function changed(Request $request)
    {//アイテム変更確認画面
        return view('stages/changed', ['name' => $request->name]);
    }
}
