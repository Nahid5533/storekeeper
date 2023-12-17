<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/products/create', [ProductController::class, 'showCreateForm']);
Route::post('/products', [ProductController::class, 'addProduct'])->name('products.store');


Route::get('/products/{product}/edit-price', [PriceController::class, 'showPriceForm']);
Route::put('/products/{product}/update-price', [PriceController::class, 'updatePrice'])->name('products.updatePrice');


Route::get('/dashboard', [DashboardController::class, 'showDashboard']);


Route::get('/transactions', [TransactionController::class, 'showTransactionHistory']);
