<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::middleware(['auth:sanctum'])->group(function () {});

Route::controller(\App\Http\Controllers\Api\Datatable\DataTableController::class)->group(function () {
    Route::get('/users/datatable', 'index');
});

Route::controller(\App\Http\Controllers\Api\UserController::class)->group(function () {
    Route::get('/users', 'index');
    Route::post('/user/create', 'store');
    Route::get('/user/show/{user}', 'show');
    Route::put('/user/update/{user}', 'update')->name('updateUserApi');
    Route::delete('/user/destroy/{user}', 'destroy')->name('destroyUserApi');
});

Route::controller(\App\Http\Controllers\Api\JsChart\JsChartController::class)->group(function () {
    Route::get('/users-count', 'usersCount')->name('usersCount');
    Route::get('/user-login-platform-count', 'userLoginPlatform')->name('userLoginPlatformCount');
    Route::get('/user-login-browser-count', 'userLoginBrowser')->name('userLoginBrowserCount');
});
