<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.index');
});
Route::resources([
    'categories' => CategoryController::class
]);
Route::resource('products', ProductController::class);
