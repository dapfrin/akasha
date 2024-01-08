<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\CheckRole;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\PurchaseController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    // Regular user home route
    Route::get('/home1', [UserHomeController::class, 'index'])->name('home1');

    // Authentication routes
    Route::get('/home', [HomeController::class, 'index'])->name('home'); // Corrected this line

    // Admin Dashboard
    Route::middleware([CheckRole::class . ':admin'])->group(function () {
        Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
        Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
        Route::put('/admin/update/{id}', [AdminController::class, 'update'])->name('admin.update');
        Route::delete('/admin/destroy/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
    });

    // Registration routes
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

    // Shop, cart, and other routes...
    Route::get('/shop', [ShopController::class, 'index'])->name('shop');

    // Login routes
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::get('/purchase', [PurchaseController::class, 'index'])->name('purchase');
