<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/product/{id}', function ($id) {
    // Database検索などの処理（メソッドの呼び出し）
    $message = "item id is {$id}.";
    return view('product.show', [
        'message' => $message
    ]);
});
