<?php

use App\Http\Controllers\api\MotorcycleApiController;
use App\Http\Controllers\api\BrandApiController;
use Illuminate\Support\Facades\Route;

Route::get('/motorcycle', [MotorcycleApiController::class, 'index']);

Route::get('/brand', [BrandApiController::class, 'index']);

Route::get('/motorcycle/{id}', [MotorcycleApiController::class, 'detail']);

Route::get('/brand/{id}', [BrandApiController::class, 'detail']);
