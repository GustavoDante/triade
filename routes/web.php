<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebsiteAccessoriesController;
use App\Http\Controllers\WebsiteCartController;
use App\Http\Controllers\WebsiteChildsController;
use App\Http\Controllers\WebsiteHomeController;
use App\Http\Controllers\WebsiteMansController;
use App\Http\Controllers\WebsiteWomansController;
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
Route::get('/womans', [WebsiteWomansController::class, 'index'])->name('website.womans');
Route::get('/mans', [WebsiteMansController::class, 'index'])->name('website.mans');
Route::get('/childs', [WebsiteChildsController::class, 'index'])->name('website.childs');
Route::get('/accessories', [WebsiteAccessoriesController::class, 'index'])->name('website.accessories');

Route::get('/cart', [WebsiteCartController::class, 'index'])->name('website.cart');

Route::get('/product/{id}', [ProductController::class, 'index'])->name('products.index');

// Route::get('/product/cart', [ProductController::class, 'cart'])->name('cart');
