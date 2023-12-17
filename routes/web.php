<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('welcome');
});

// Routes for adding products
Route::get('/products/create', [ProductController::class, 'showCreateForm']);
Route::post('/products', [ProductController::class, 'addProduct'])->name('products.store');

// Routes for changing product prices
Route::get('/products/{product}/edit-price', [PriceController::class, 'showPriceForm']);
Route::put('/products/{product}/update-price', [PriceController::class, 'updatePrice'])->name('products.updatePrice');

// Dashboard route
Route::get('/dashboard', [DashboardController::class, 'showDashboard']);

// Transaction history route
Route::get('/transactions', [TransactionController::class, 'showTransactionHistory']);