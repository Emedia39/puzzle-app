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
        $user = User::findOrFail($request->user_id);
        //カラムを作成するときはこれ
        /*'name' => $request->name,
        'level' => $request->level,
        'experience' => $request->experience*/

        //カラムの更新※jsonから情報を提示されているので、受け取る
        $user->name = $request['name'];
        $user->level = $request['level'];
        $user->experience = $request['experience'];

        $user->save();//送られてきたデータだけを更新してsave※削除は$user->delete();

        return response()->json(['user_id' => $user->id]);
        //return response()->json();//何も渡さない場合は [] になる
    }

}
