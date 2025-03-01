<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\AdminMiddlerware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.index');
});
Route::resources([
    'categories' => CategoryController::class
]);


Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Group route untuk admin yang terproteksi middleware
Route::middleware([AdminMiddlerware::class])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('products', ProductController::class);
    Route::resource('carts', CartController::class);
});
