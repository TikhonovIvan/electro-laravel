<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*Страницы интернет магазина*/
/*Главная страница*/
Route::get('/', [HomeController::class, 'index'])->name('home');

/*Страница одного продукта*/
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

/*Оформление заказа*/
Route::get('/checkout', [OrderController::class, 'create'])->name('checkout.create');
Route::post('/checkout', [OrderController::class, 'store'])->name('checkout.store');




/*Страница корзины продукта*/
Route::get('/store-cart', [OrderController::class, 'storeCart'])->name('store.cart');

/*Страница всех категорий*/
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');


/*регистрация и авторизация */
Route::get('/register', [AuthController::class, 'create'])->name('register.create');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');
Route::get('/login', [AuthController::class, 'loginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'loginAuth'])->name('login.auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
/*регистрация и авторизация End */


/*Кабинет пользователей в магазине GRUD */
Route::get('/account', [AuthController::class, 'accountForm'])->name('account.form');
Route::put('/account/{id}', [AuthController::class, 'accountFormUpdate'])->name('account.edit.form');
Route::delete('/account/{form}', [AuthController::class, 'accountFormDelete'])->name('account.delete.form');
/*Кабинет пользователей в магазине GRUD end*/



/*Админка*/

/*главная страница и статистика*/
Route::get('/admin', [MainController::class, 'index'])->name('admin.main.index');


/*Создание категории GRUD*/
Route::get('/admin/category', [AdminCategoryController::class, 'index'])->name('admin.category.index');
Route::get('/admin/category/create', [AdminCategoryController::class, 'create'])->name('admin.category.create');
Route::post('/admin/category/create', [AdminCategoryController::class, 'store'])->name('admin.category.store');
Route::get('/admin/category/{id}/edit', [AdminCategoryController::class, 'edit'])->name('admin.category.edit');
Route::put('/admin/category/{id}', [AdminCategoryController::class, 'update'])->name('admin.category.update');
Route::delete('/admin/category/{id}', [AdminCategoryController::class, 'destroy'])->name('admin.category.destroy');
/*Создание категории GRUD End*/


/*Пользователи системы кабинет админа GRUD*/
Route::get('/admin/users', [AuthController::class, 'index'])->name('admin.users.index');
Route::get('/admin/user/{id}/edit', [AuthController::class, 'edit'])->name('admin.user.edit');
Route::put('/admin/user/{id}', [AuthController::class, 'update'])->name('admin.user.update');
Route::delete('/admin/user/{id}', [AuthController::class, 'destroy'])->name('admin.user.destroy');
/*Пользователи системы кабинет админа GRUD End*/


/*Создание товара Склад GRUD*/
Route::get('/admin/products', [AdminProductController::class, 'index'])->name('admin.products.index');
Route::get('/admin/products/create', [AdminProductController::class, 'create'])->name('admin.products.create');
Route::post('/admin/products/create', [AdminProductController::class, 'store'])->name('admin.products.store');
Route::get('/admin/products/{id}', [AdminProductController::class, 'show'])->name('admin.products.show');
Route::get('/admin/products/{id}/edit', [AdminProductController::class, 'edit'])->name('admin.products.edit');
Route::put('/admin/products/{id}', [AdminProductController::class, 'update'])->name('admin.products.update');
Route::delete('/admin/product/image/{id}', [AdminProductController::class, 'deleteImage'])->name('admin.product.image.delete');

Route::delete('/admin/products/{id}', [AdminProductController::class, 'destroy'])->name('admin.products.destroy');

/*Создание товара Склад GRUD end*/


/*Заказы клиентов GRUD*/

Route::get('/admin/orders', [AdminOrderController::class, 'index'])->name('admin.orders.index');
Route::get('/admin/orders/{id}', [AdminOrderController::class, 'show'])->name('admin.order.show');
Route::get('/admin/orders/{id}/edit', [AdminOrderController::class, 'edit'])->name('admin.order.edit');
Route::put('/admin/orders/{order}', [AdminOrderController::class, 'update'])->name('admin.order.update');
Route::delete('/admin/orders/{id}', [AdminOrderController::class, 'destroy'])->name('admin.order.destroy');
/*Заказы клиентов GRUD end*/



