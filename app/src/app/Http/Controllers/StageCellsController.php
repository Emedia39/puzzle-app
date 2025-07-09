<?php

namespace App\Http\Controllers;

use App\Models\Stage;
use Illuminate\Http\Request;

class StageCellsController extends Controller
{
    //
    public function index(Request $request)
    {
        //テーブルの全てのレコードを取得
        $stageCells = Stage::All();
        return view('stage_cells/index', ['stageCells' => $stageCells]);
    }
}
