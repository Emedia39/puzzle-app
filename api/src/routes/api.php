<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('users/index', [UserController::class, 'index'])->name('users.index');

Route::get('items/index', [UserController::class, 'index'])->name('items.index');

Route::post('users/store', [UserController::class, 'store'])->name('users.store');

Route::post('users/update', [UserController::class, 'update'])->name('users.update');

Route::get('users/{user_id}', [UserController::class, 'show'])->name('users.show');

Route::get('items/{user_id}', [UserController::class, 'show'])->name('items.show');
