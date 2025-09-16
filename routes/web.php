<?php

use Illuminate\Routing\RouteAction;
use Illuminate\Support\Facades\Route;
// test

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

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
