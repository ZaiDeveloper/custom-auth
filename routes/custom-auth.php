<?php

use Zaizainal\CustomAuth\Http\Controllers\RegisterController;
use Zaizainal\CustomAuth\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('register', [RegisterController::class, 'create'])->name('register');
        Route::post('register', [RegisterController::class, 'store'])->name('register.attempt');

        Route::get('login', [LoginController::class, 'show'])->name('show.login');
        Route::post('login', [LoginController::class, 'login'])->name('login.attempt');
    });
    Route::middleware('auth')->group(function () {
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');

        Route::get('home', function () {
            return view('custom-auth::home');
        })->name('home');
    });
});
