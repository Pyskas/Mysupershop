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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);


Route::get('/category', function () {
    return view('pages/category');
});

Route::get('/product', function () {
    return view('pages/product');
});

Route::get('/cart', function () {
    return view('pages/cart');
});