<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PurchasesController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\ReportsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(ProductsController::class)->group(function (){
    Route::get('/products', 'index')->name('products.index');
    Route::get('/products/create', 'create')->name('products.create');
    Route::post('/products', 'store')->name('products.store');
    Route::get('/products/{product}/edit', 'edit')->name('products.edit');
    Route::put('/products/{product}', 'update')->name('products.update');
    Route::delete('/products/{product}', 'destroy')->name('products.destroy');
});

Route::controller(SalesController::class)->group(function (){
    Route::get('/sales', 'index')->name('sales.index');
    Route::get('/sales/create', 'create')->name('sales.create');
    Route::post('/sales', 'store')->name('sales.store');
    Route::get('/sales/{product}/edit', 'edit')->name('sales.edit');
    Route::put('/sales/{product}', 'update')->name('sales.update');
    Route::delete('/sales/{product}', 'destroy')->name('sales.destroy');
});

Route::controller(SuppliersController::class)->group(function (){
    Route::get('/suppliers', 'index')->name('products.index');
    Route::get('/suppliers/create', 'create')->name('products.create');
    Route::post('/suppliers', 'store')->name('products.store');
    Route::get('/suppliers/{product}/edit', 'edit')->name('products.edit');
    Route::put('/suppliers/{product}', 'update')->name('products.update');
    Route::delete('/suppliers/{product}', 'destroy')->name('products.destroy');
});

Route::controller(PurchasesController::class)->group(function (){
    Route::get('/purchases', 'index')->name('products.index');
    Route::get('/purchases/create', 'create')->name('products.create');
    Route::post('/purchases', 'store')->name('products.store');
    Route::get('/purchases/{product}/edit', 'edit')->name('products.edit');
    Route::put('/purchases/{product}', 'update')->name('products.update');
    Route::delete('/purchases/{product}', 'destroy')->name('products.destroy');
});

Route::controller(CustomersController::class)->group(function (){
    Route::get('/customers', 'index')->name('products.index');
    Route::get('/customers/create', 'create')->name('products.create');
    Route::post('/customers', 'store')->name('products.store');
    Route::get('/customers/{product}/edit', 'edit')->name('products.edit');
    Route::put('/customers/{product}', 'update')->name('products.update');
    Route::delete('/customers/{product}', 'destroy')->name('products.destroy');
});

Route::controller(InventoryController::class)->group(function (){
    Route::get('/inventory', 'index')->name('products.index');
    Route::get('/inventory/create', 'create')->name('products.create');
    Route::post('/inventory', 'store')->name('products.store');
    Route::get('/inventory/{product}/edit', 'edit')->name('products.edit');
    Route::put('/inventory/{product}', 'update')->name('products.update');
    Route::delete('/inventory/{product}', 'destroy')->name('products.destroy');
});

Route::controller(ReportsController::class)->group(function (){
    Route::get('/reports', 'index')->name('products.index');
    Route::get('/reports/create', 'create')->name('products.create');
    Route::post('/reports', 'store')->name('products.store');
    Route::get('/reports/{product}/edit', 'edit')->name('products.edit');
    Route::put('/reports/{product}', 'update')->name('products.update');
    Route::delete('/reports/{product}', 'destroy')->name('products.destroy');
});



require __DIR__.'/auth.php';
