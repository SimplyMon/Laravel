<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;

use App\Http\Controllers\testUserController;
// TEST

use App\Http\Controllers\test;

Route::get('/', [testController::class, 'home']);

Route::get('/about', view());

Route::get('/todos', [test::class, 'todoList']);

Route::get('/test-users/create', [testUserController::class, 'create'])->name('test_users.create');
Route::post('/test-users', [testUserController::class, 'store'])->name('test_users.store');
