<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserDegreeResource;
use App\Models\UserDegree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserDegreeController extends Controller
{
    //
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_degree' => ['required’, ‘int'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        return $request;
    }

    public function show(Request $request)
    {
        $user_degree = UserDegree::findOrFail($request->user_id);
        return response()->json(
            UserDegreeResource::make($user_degree));//※単一レコード
        //StageResource::collection($stage));//複数レコード
    }

}
