<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::middleware(['auth'])->group(function () {
    Route::get('/', fn() => redirect()->route('products.index'));
    Route::resource('products', ProductController::class);
});
require __DIR__.'/auth.php';
