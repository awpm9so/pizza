<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\PizzaListController;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index'])->name('catalog');;

Route::get('successfulOrder', [OrderController::class, 'successfulOrder'])->name('successfulOrder');;;

Route::post('order/check', [OrderController::class, 'order_check']);

Route::get('/getPizzaList', [PizzaListController::class, 'getPizzaList']);
