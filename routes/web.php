<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product/{id}', [ProductController::class, 'index'])->name('product.show');
Route::get('/checkout', [OrderController::class, 'index'])->name('checkout.index');
Route::get('/store-cart', [OrderController::class, 'storeCart'])->name('store.cart');
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');


/*регистрация и авторизация*/
Route::get('/register', [AuthController::class, 'create'])->name('register.create');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');
Route::get('/login', [AuthController::class, 'loginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'loginAuth'])->name('login.auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/account', [AuthController::class, 'accountForm'])->name('account.form');
Route::put('/account/{id}', [AuthController::class, 'accountFormUpdate'])->name('account.edit.form');


/*Админка*/

Route::get('/admin', [MainController::class, 'index'])->name('admin.main.index');
Route::get('/admin/category', [AdminCategoryController::class, 'index'])->name('admin.category.index');
