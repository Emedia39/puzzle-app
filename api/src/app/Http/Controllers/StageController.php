<?php

namespace App\Http\Controllers;

use App\Http\Resources\StageResource;
use App\Models\Stage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StageController extends Controller
{
    //
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'stage' => ['required’, ‘int'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        return $request;
    }

    public function show(Request $request)
    {
        $stage = Stage::findOrFail($request->stage_id);
        return response()->json(
            StageResource::make($stage));//※単一レコード
        //StageResource::collection($stage));//複数レコード
    }

}
