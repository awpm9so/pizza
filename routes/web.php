<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;

Route::get('/', [OrderController::class, 'index']);

Route::get('/order', [OrderController::class, 'order']);

Route::get('/cart', [CartController::class, 'index']);

Route::post('/order/check', [OrderController::class, 'order_check']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
