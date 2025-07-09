<?php

namespace App\Http\Controllers;

use App\Http\Resources\ItemResource;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
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
        $item = Item::findOrFail($request->item_id);
        return response()->json(
            ItemResource::make($item));//※単一レコード
        //ItemResource::collection($user));//複数レコード
    }

}
