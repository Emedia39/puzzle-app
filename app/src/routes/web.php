<?php

use App\Http\Controllers\AuthController;

use App\Http\Controllers\StageController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserItemController;

Route::get('/{error_id?}', [AuthController::class, 'index']);
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);

Route::get('accounts/index', [AccountController::class, 'index']);


Route::post('users/index', [UserController::class, 'index']);
Route::get('users/index', [UserController::class, 'index']);

Route::post('user_items/index', [UserItemController::class, 'index']);
//Route::get('user_items/index', [UserController::class, 'index']);

//Route名・Routeのグループ化※まずAuthMiddlewareが呼ばれ、その後アイテム
Route::prefix('items')->name('items.')->controller(ItemController::class)
    ->middleware(\App\Http\Middleware\AuthMiddleware::class)->group(function () {
        Route::get('index', 'index')->name('index');//'item.index'※表示

        //Route::post('create', 'create')->name('create');//'item.create'※登録画面
        Route::get('create', 'create')->name('create');//'item.create'※登録画面

        Route::post('store', 'store')->name('store');//'item.store'※登録処理

        Route::post('delete', 'delete')->name('delete');//'item.delete'※アイテム削除処理
        Route::get('deleted', 'deleted')->name('deleted');//'item.deleted'※アイテム削除完了画面

        Route::post('change', 'change')->name('change');//'item.delete'※アイテム更新処理
        Route::post('changed', 'changed')->name('changed');//'item.deleted'※アイテム更新完了画面
        Route::get('changed', 'changed')->name('changed');//'item.deleted'※アイテム更新完了画面
    });
Route::post('items/index', [ItemController::class, 'index']);//※

/*Route::get('items/index', [UserController::class, 'index'])->name('item.index');

Route::post('items/create', [ItemController::class, 'create'])->name('item.create');
Route::post('items/store', [ItemController::class, 'store'])->name('item.store');*/

Route::get('items/register', [ItemController::class, 'register'])->name('name.register');
Route::get('/items/register', [ItemController::class, 'register'])->name('item.register');

Route::post('items/confirm_destroy',
    [ItemController::class, 'confirmDestroy'])->name('item.confirm_destroy');//アイテム削除確認画面
Route::post('items/confirm_update', [ItemController::class, 'confirmUpdate'])->name('item.confirm_destroy');//アイテム削除入力画面

Route::get('users/individual/{id}', [UserController::class, 'individual'])->name('users.individual');//


Route::get('stages/index', [StageController::class, 'index']);

Route::get('stages_cells/index', [StageController::class, 'index'])->name('index');//

//
//<form method="post" action={{url('logout')}}>
//    @csrf<!--CSRF来策・やらないとララベルが判断して419エラー-->
//    <button type="submit" name='logout'>戻る</button>
//</form>
//のときはpost
//
//<a href="{{url('items/create')}}">アイテム一覧へ</a>や
// return view('items/confirm_destroy', ['item' => $item]);
//のときはget
