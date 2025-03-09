<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimonialController;
use App\Http\Middleware\AdminMiddlerware;

use Illuminate\Support\Facades\Route;


Route::resources([
    'categories' => CategoryController::class
]);
Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/carts/form', [IndexController::class, 'carts'])->name('carts.form');
Route::post('/carts/store', [IndexController::class, 'store_carts'])->name('carts.form.store');
Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::post('testimonial/store', [TestimonialController::class, 'store'])->name('testimonial.store');


Route::middleware([AdminMiddlerware::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('products', ProductController::class);
    Route::resource('carts', CartController::class);
});
