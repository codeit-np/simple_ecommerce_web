<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class,'home']);
Route::get('/product/{id}', [PageController::class,'product']);
Route::get('/cart', [PageController::class,'cart']);
Route::post('/cart', [PageController::class,'addToCart']);
Route::delete('/cart/{id}', [PageController::class,'deleteItem']);
Route::put('/cart/{id}', [PageController::class,'updateCartItem']);
Route::get('/dashboard', [PageController::class,'dashboard']);
Route::get('/address', [PageController::class,'address']);
Route::get('/history', [PageController::class,'history']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
