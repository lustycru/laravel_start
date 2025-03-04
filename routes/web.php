<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotorcycleController;
use App\Http\Controllers\BrandController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/motorcycle', [MotorcycleController::class, 'index']);

Route::get('/brand', [BrandController::class, 'index']);
