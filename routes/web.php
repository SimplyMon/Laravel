<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;

use App\Http\Controllers\test;

Route::get('/', [testController::class, 'home']);

Route::get('/todos', [test::class, 'todoList']);
