<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('index');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/view-create-user', [AuthController::class, 'viewCreateUser'])->name('viewCreateUser');
    Route::post('/create-user', [AuthController::class, 'createUser'])->name('createUser');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return inertia('Dashboard');
    })->name('dashboard');
});

Route::post('/logout', [AuthController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

require __DIR__ . '/auth.php';
