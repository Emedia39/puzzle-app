<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required’, ‘string'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        return $request;
    }

    public function show(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        return response()->json(
            UserResource::make($user));//※単一レコード
        //UserResource::collection($user));//複数レコード
    }

    public function store(Request $request)
    {
        //[バリデーションチェック]
        $user = User::create([
            'name' => $request->name,
            'level' => $request->level,
            'experience' => $request->experience
        ]);
        return response()->json(['user_id' => $user->id]);
    }

    public function update(Request $request)
    {
        //[バリデーションチェック]
        $user = User::findOrFail($request->user('id'));
        $user->save();

        return response()->json();
    }

}
