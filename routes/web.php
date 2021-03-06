<?php

use App\Http\Controllers\ProductController;
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
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/', [ProductController::class, 'index']);
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/detail/{id}', [ProductController::class, 'detail']);
Route::post('/add_to_cart', [ProductController::class, 'addToCart']);
Route::get('/cart_items', [ProductController::class, 'cartItems']);
Route::get('/remove_item/{id}', [ProductController::class, 'removeItem']);
Route::get('/order', [ProductController::class, 'order']);
Route::get('/contact', [ProductController::class, 'contact']);
Route::get('/about', [ProductController::class, 'about']);
Route::post('/make_order', [ProductController::class, 'makeOrder']);
Route::get('/order_history', [ProductController::class, 'orderHistory']);


