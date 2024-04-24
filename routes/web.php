<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::controller(GoogleController::class)->group(function () {
    Route::get('auth/redirect', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/callback', 'handleGoogleCallback');
});
