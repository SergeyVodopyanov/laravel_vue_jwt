<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
Route::group(['prefix' => 'users'], function () {

        // Route::post('/', 'StoreController');
        Route::post('/', App\Http\Controllers\User\StoreController::class);

        
});

Route::group(['prefix' => 'fruits'], function () {
        Route::get('/', App\Http\Controllers\Fruit\IndexController::class);
});
