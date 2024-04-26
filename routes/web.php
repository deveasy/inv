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
    return view('dashboard.index');
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
        Route::get('/sales/new', 'create')->name('sales.create');
        Route::post('/sales', 'store')->name('sales.store');
        Route::get('/sales/{sale}/edit', 'edit')->name('sales.edit');
        Route::put('/sales/{sale}', 'update')->name('sales.update');
        Route::delete('/sales/{sale}', 'destroy')->name('sales.destroy');
        Route::delete('/sales', 'returns')->name('sales.returns');
    });
    
    Route::controller(ProductsController::class)->group(function() {
        Route::get('/products', 'index')->name('products.index');
        Route::get('/products/new', 'create')->name('products.create');
        Route::post('/products/store', 'store')->name('products.store');
        Route::get('/products/{product}/edit', 'edit')->name('products.edit');
        Route::put('/products/{product}', 'update')->name('products.update');
        Route::delete('/products/{product}', 'destroy')->name('products.destroy');
    });
    
    Route::controller(SuppliersController::class)->group(function() {
        Route::get('/suppliers', 'index')->name('suppliers.index');
        Route::get('/suppliers/new', 'create')->name('suppliers.create');
        Route::post('/suppliers', 'store')->name('suppliers.store');
        Route::get('/suppliers/{supplier}/edit', 'edit')->name('suppliers.edit');
        Route::put('/suppliers/{supplier}', 'update')->name('suppliers.update');
        Route::delete('/suppliers/{supplier}', 'destroy')->name('suppliers.destroy');
    });
    
    Route::controller(PurchasesController::class)->group(function() {
        Route::get('/purchases', 'index')->name('purchases.index');
        Route::get('/purchases/new', 'create')->name('purchases.create');
        Route::post('/purchases', 'store')->name('purchases.store');
        Route::get('/purchases/{purchase}/edit', 'edit')->name('purchases.edit');
        Route::put('/purchases/{purchase}', 'update')->name('purchases.update');
        Route::delete('/purchases/{purchase}', 'destroy')->name('purchases.destroy');
    });
    
    Route::controller(CustomersController::class)->group(function() {
        Route::get('/customers', 'index')->name('customers.index');
        Route::get('/customers/new', 'create')->name('customers.create');
        Route::post('/customers', 'store')->name('customers.store');
        Route::get('/customers/{customer}/edit', 'edit')->name('customers.edit');
        Route::put('/customers/{customer}', 'update')->name('customers.update');
        Route::delete('/customers/{customer}', 'destroy')->name('customers.destroy');
    });
    
    Route::controller(InventoryController::class)->group(function() {
        Route::get('/inventory', 'index')->name('inventory.index');
        Route::get('/inventory/new', 'create')->name('inventory.create');
        Route::post('/inventory', 'store')->name('inventory.store');
        Route::delete('/inventory/{item}', 'destroy')->name('inventory.destroy');
    });
    
    Route::controller(ReportsController::class)->group(function() {
        Route::get('/reports', 'index')->name('reports.index');
        Route::get('/reports/new', 'create')->name('reports.create');
        Route::post('/reports', 'store')->name('reports.store');
        Route::get('/reports/{report}/edit', 'edit')->name('reports.edit');
        Route::put('/reports/{report}', 'update')->name('reports.update');
        Route::delete('/reports/{report}', 'destroy')->name('reports.destroy');
    });
});


require __DIR__.'/auth.php';
