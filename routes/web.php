<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('products.create');
});

Route::post('/products', [ProductController::class, 'store'])->name('products.store');
