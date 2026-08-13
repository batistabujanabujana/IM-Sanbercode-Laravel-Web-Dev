<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

// Route Home / Dashboard
Route::get('/', [DashboardController::class, 'home'])->name('home');

// Route Register & Welcome
Route::get('/register', [FormController::class, 'register'])->name('register');
Route::post('/welcome', [FormController::class, 'welcome'])->name('welcome');

Route::get('/master', function () {
    return view('layouts.app');
});