<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/{page}', App\Http\Controllers\IndexController::class)->where('page', '.*');
// Route::get('/{page}', App\Http\Controllers\IndexController::class)->where('page', '.*');

