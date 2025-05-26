<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*Страницы интернет магазина*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product/{id}', [ProductController::class, 'index'])->name('product.show');
Route::get('/checkout', [OrderController::class, 'index'])->name('checkout.index');
Route::get('/store-cart', [OrderController::class, 'storeCart'])->name('store.cart');
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');


/*регистрация и авторизация */
Route::get('/register', [AuthController::class, 'create'])->name('register.create');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');
Route::get('/login', [AuthController::class, 'loginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'loginAuth'])->name('login.auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
/*регистрация и авторизация End */

Route::get('/account', [AuthController::class, 'accountForm'])->name('account.form');
Route::put('/account/{id}', [AuthController::class, 'accountFormUpdate'])->name('account.edit.form');




/*Админка*/

/*главная страница и статистика*/
Route::get('/admin', [MainController::class, 'index'])->name('admin.main.index');



/*Создание категории GRUD*/
Route::get('/admin/category', [AdminCategoryController::class, 'index'])->name('admin.category.index');
Route::get('/admin/category/create', [AdminCategoryController::class, 'create'])->name('admin.category.create');
Route::post('/admin/category/create', [AdminCategoryController::class, 'store'])->name('admin.category.store');
Route::get('/admin/category/{id}', [AdminCategoryController::class, 'edit'])->name('admin.category.edit');
Route::put('/admin/category/{id}', [AdminCategoryController::class, 'update'])->name('admin.category.update');
Route::delete('/admin/category/{id}', [AdminCategoryController::class, 'destroy'])->name('admin.category.destroy');
/*Создание категории GRUD End*/


