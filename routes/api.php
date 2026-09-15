<?php

use App\Http\Controllers\Api\OrderController;
use Illuminate\Support\Facades\Route;

Route::apiResource('orders', OrderController::class);
Route::patch('orders/{order}/status', [OrderController::class, 'updateStatus']);