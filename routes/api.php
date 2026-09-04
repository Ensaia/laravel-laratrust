<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::middleware(['auth:sanctum'])->group(function () {});

Route::controller(\App\Http\Controllers\Api\JsChart\JsChartController::class)->group(function () {
    Route::get('/users-count', 'usersCount')->name('usersCount');
    Route::get('/user-login-platform-count', 'userLoginPlatform')->name('userLoginPlatformCount');
    Route::get('/user-login-browser-count', 'userLoginBrowser')->name('userLoginBrowserCount');
});
