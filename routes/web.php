<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PizzaListController;

Route::get('/', [OrderController::class, 'index']);

Route::get('/order', [OrderController::class, 'order']);

Route::get('/cart', [CartController::class, 'index']);

Route::post('/order/check', [OrderController::class, 'order_check']);

Route::get('/getPizzaList', [PizzaListController::class, 'getPizzaList']);
