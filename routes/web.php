<?php

use Illuminate\Routing\RouteAction;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;

Route::get('/', [testController::class, 'home']);

Route::get('/order', function () {
    return view('order');
});

Route::prefix('/details')->group(function () {
    Route::get('/students', function () {
        return 'This is a Students page';
    });
    Route::get('/teachers', function () {
        return 'This is a Teachers page';
    });
});
