<?php

use App\Http\Controllers\PlanController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::resource('plans', PlanController::class);
Route::resource('orders', OrderController::class);
