<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductAdminController;
use App\Http\Controllers\ProfileController;

// --- PUBLIC FRONTEND ROUTES ---
Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/services', [PageController::class, 'services']);
Route::get('/products', [PageController::class, 'products']);
Route::get('/contact', [PageController::class, 'contact']);
Route::post('/contact/submit', [ContactController::class, 'store']);

// --- SECURE ADMIN ROUTES (Requires Login) ---
Route::middleware(['auth', 'verified'])->group(function () {
    // Client Dashboard
    Route::get('/dashboard', [ProductAdminController::class, 'index'])->name('dashboard');
    
    // Product Management Actions
    Route::post('/dashboard/products', [ProductAdminController::class, 'store'])->name('admin.products.store');
    Route::delete('/dashboard/products/{product}', [ProductAdminController::class, 'destroy'])->name('admin.products.destroy');
    
    // Default Breeze Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';