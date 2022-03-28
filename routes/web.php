<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Colleges\COFEDController;
use App\Http\Controllers\Colleges\CMEController;
use App\Http\Controllers\Colleges\CASController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SignInController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\DashboardController;

Route::get('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])
->name('dashboard')
->middleware('auth');
Route::delete('/dashboard', [DashboardController::class, 'destroy'])->name('dashboard.destroy');

Route::get('/cas', [CASController::class, 'index'])->name('cas');

Route::get('/cme', [CMEController::class, 'index'])->name('cme');

Route::get('/cofed', [COFEDController::class, 'index'])->name('cofed');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/signin', [SignInController::class, 'index'])->name('login');
Route::post('/signin', [SignInController::class, 'store']);

Route::get('/apply', [ApplyController::class, 'index'])->name('apply');
Route::post('/apply', [ApplyController::class, 'store']);

Route::get('/', function () {
    return view('pages.index');
})->name('home');
