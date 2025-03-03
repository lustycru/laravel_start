<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Motorcycle;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/motorcycle', function () {
    $motorcycle = new Motorcycle();
    return $motorcycle->index();
});
