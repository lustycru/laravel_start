<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotorcycleController;
use App\Http\Controllers\BrandController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/motorcycle', function () {
    $motorcycle = new MotorcycleController();
    return $motorcycle->index();
});

Route::get('/brand', function () {
    $brand = new BrandController();
    return $brand->index();
});
