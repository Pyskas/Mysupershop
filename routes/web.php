<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/catalog/{hash}', [\App\Http\Controllers\CategoriesController::class, 'index'])->name('catalog');
Route::get('/product/{hash}',  [\App\Http\Controllers\ProductController::class, 'index'])->name('product');
Route::get('/cart',  [\App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::get('/cart/thanks',  [\App\Http\Controllers\CartController::class, 'thanks'])->name('cart-thanks');

Route::post('/cart/order',  [\App\Http\Controllers\CartController::class, 'order'])->name('cart-order');