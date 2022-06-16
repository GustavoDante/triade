<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebsiteHomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WebsiteHomeController::class, 'index'])->name('website.home');

Route::get('/product/{id}', [ProductController::class, 'index'])->name('products.index');

// Route::get('/product/cart', [ProductController::class, 'cart'])->name('cart');
