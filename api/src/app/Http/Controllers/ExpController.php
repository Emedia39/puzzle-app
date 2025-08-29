<?php

namespace App\Http\Controllers;

use App\Http\Resources\ExpResource;
use App\Models\Exp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExpController extends Controller
{
    //
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'exp' => ['required’, ‘int'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        return $request;
    }

    public function show(Request $request)
    {
        $exp = Exp::findOrFail($request->exp_id);
        return response()->json(
            ExpResource::make($exp));//※単一レコード
        //ExpResource::collection($exp));//複数レコード
    }

}
