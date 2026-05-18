<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/product/{id}', function ($id) {
    // Database検索などの処理（メソッドの呼び出し）
    $message = "item id is {$id}.";
    return view('product.show', [
        'message' => $message
    ]);
});
