<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StageController;
use App\Http\Controllers\ExpController;

use App\Http\Controllers\UserDegreeController;

//users/items
Route::get('users/index', [UserController::class, 'index'])->name('users.index');

Route::get('items/index', [UserController::class, 'index'])->name('items.index');

Route::post('users/store', [UserController::class, 'store'])->name('users.store');

//Route::post('users/update', [UserController::class, 'update'])->name('users.update');

Route::get('users/{user_id}', [UserController::class, 'show'])->name('users.show');

Route::get('items/{user_id}', [UserController::class, 'show'])->name('items.show');

Route::post('users/update', [UserController::class, 'update'])
    ->middleware('auth:sanctum')->name('users.update');

//stages/experiences
Route::get('stages/index', [StageController::class, 'index'])->name('stages.index');
Route::get('stages/{stage_id}', [StageController::class, 'show'])->name('stages.show');

Route::get('exps/index', [ExpController::class, 'index'])->name('exps.index');
Route::get('exps/{exp_id}', [ExpController::class, 'show'])->name('exps.show');

//user_degree/
Route::get('user_degrees/index', [UserDegreeController::class, 'index'])->name('user_degrees.index');
Route::get('user_degrees/{user_id}', [UserDegreeController::class, 'show'])->name('user_degrees.show');
