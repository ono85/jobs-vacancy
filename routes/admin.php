<?php

use Illuminate\Support\Facades\Route;

// Admin Routes
Route::prefix("admin")->group(function () {
    Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
    Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])
        ->name('login');

    Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);
    Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])
        ->name('register');

    Route::get('password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])
        ->name('password.request');

    Route::post('password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])
        ->name('password.email');

    Route::get('password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])
        ->name('password.reset');

    Route::post('password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])
        ->name('password.update');

    Route::middleware(['auth'])->group(function () {
        Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])
            ->name('logout');
    });
});
