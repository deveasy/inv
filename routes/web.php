<?php

use App\Http\Controllers\AdminController;
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

    Route::controller(AdminController::class)->group(function() {
        Route::get('/admin/settings', 'settings')->name('admin.settings');
        Route::get('/admin/support', 'support')->name('admin.support');
    });

    Route::controller(SalesController::class)->group(function () {
        Route::get('/sales', 'index')->name('sales.index');
        Route::get('/sales/create', 'create')->name('sales.create');
        Route::post('/sales', 'store')->name('sales.store');
        Route::get('/sales/{product}/edit', 'edit')->name('sales.edit');
        Route::put('/sales/{product}', 'update')->name('sales.update');
        Route::delete('/sales/{product}', 'destroy')->name('sales.destroy');
    });
    
    Route::controller(ProductsController::class)->group(function() {
        Route::get('/products', 'index')->name('products.index');
        Route::get('/products/create', 'create')->name('products.create');
        Route::post('/products', 'store')->name('products.store');
        Route::get('/products/{product}/edit', 'edit')->name('products.edit');
        Route::put('/products/{product}', 'update')->name('products.update');
        Route::delete('/products/{product}', 'destroy')->name('products.destroy');
    });
    
    Route::controller(SuppliersController::class)->group(function() {
        Route::get('/suppliers', 'index')->name('suppliers.index');
        Route::get('/suppliers/create', 'create')->name('suppliers.create');
        Route::post('/suppliers', 'store')->name('suppliers.store');
        Route::get('/suppliers/{product}/edit', 'edit')->name('suppliers.edit');
        Route::put('/suppliers/{product}', 'update')->name('suppliers.update');
        Route::delete('/suppliers/{product}', 'destroy')->name('suppliers.destroy');
    });
    
    Route::controller(PurchasesController::class)->group(function() {
        Route::get('/purchases', 'index')->name('purchases.index');
        Route::get('/purchases/create', 'create')->name('purchases.create');
        Route::post('/purchases', 'store')->name('purchases.store');
        Route::get('/purchases/{product}/edit', 'edit')->name('purchases.edit');
        Route::put('/purchases/{product}', 'update')->name('purchases.update');
        Route::delete('/purchases/{product}', 'destroy')->name('purchases.destroy');
    });
    
    Route::controller(CustomersController::class)->group(function() {
        Route::get('/customers', 'index')->name('customers.index');
        Route::get('/customers/create', 'create')->name('customers.create');
        Route::post('/customers', 'store')->name('customers.store');
        Route::get('/customers/{product}/edit', 'edit')->name('customers.edit');
        Route::put('/customers/{product}', 'update')->name('customers.update');
        Route::delete('/customers/{product}', 'destroy')->name('customers.destroy');
    });
    
    Route::controller(InventoryController::class)->group(function() {
        Route::get('/inventory', 'index')->name('inventory.index');
        Route::get('/inventory/create', 'create')->name('inventory.create');
        Route::post('/inventory', 'store')->name('inventory.store');
        Route::get('/inventory/{product}/edit', 'edit')->name('inventory.edit');
        Route::put('/inventory/{product}', 'update')->name('inventory.update');
        Route::delete('/inventory/{product}', 'destroy')->name('inventory.destroy');
    });
    
    Route::controller(ReportsController::class)->group(function() {
        Route::get('/reports', 'index')->name('reports.index');
        Route::get('/reports/create', 'create')->name('reports.create');
        Route::post('/reports', 'store')->name('reports.store');
        Route::get('/reports/{product}/edit', 'edit')->name('reports.edit');
        Route::put('/reports/{product}', 'update')->name('reports.update');
        Route::delete('/reports/{product}', 'destroy')->name('reports.destroy');
    });
});


require __DIR__.'/auth.php';
