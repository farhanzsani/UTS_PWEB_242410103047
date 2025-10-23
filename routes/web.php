<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [AuthController::class, 'showLogin']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');


Route::post('/login', [AuthController::class, 'Login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'ShowDashboard'])->name('dashboard');
Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
Route::get('/kelola-satwa', [DashboardController::class, 'showSatwa'])->name('showSatwa');