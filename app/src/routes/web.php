<?php

use App\Http\Controllers\AuthController;

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

Route::post('items/index', [ItemController::class, 'index']);
Route::get('items/index', [UserController::class, 'index']);

Route::post('user_items/index', [UserItemController::class, 'index']);
//Route::get('user_items/index', [UserController::class, 'index']);
