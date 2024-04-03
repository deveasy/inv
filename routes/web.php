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


Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');
Route::post('/products', [ProductsController::class, 'store'])->name('products.store');
Route::get('/products/{product}/edit', [ProductsController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductsController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductsController::class, 'destroy'])->name('products.destroy');

Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');
Route::get('/sales/create', [SalesController::class, 'create'])->name('sales.create');
Route::post('/sales', [SalesController::class, 'store'])->name('sales.store');
Route::get('/sales/{product}/edit', [SalesController::class, 'edit'])->name('sales.edit');
Route::put('/sales/{product}', [SalesController::class, 'update'])->name('sales.update');
Route::delete('/sales/{product}', [SalesController::class, 'destroy'])->name('sales.destroy');


Route::get('/suppliers', [SuppliersController::class, 'index'])->name('suppliers.index');
Route::get('/suppliers/create', [SuppliersController::class, 'create'])->name('suppliers.create');
Route::post('/suppliers', [SuppliersController::class, 'store'])->name('suppliers.store');
Route::get('/suppliers/{product}/edit', [SuppliersController::class, 'edit'])->name('suppliers.edit');
Route::put('/suppliers/{product}', [SuppliersController::class, 'update'])->name('suppliers.update');
Route::delete('/suppliers/{product}', [SuppliersController::class, 'destroy'])->name('suppliers.destroy');


Route::get('/purchases', [PurchasesController::class, 'index'])->name('purchases.index');
Route::get('/purchases/create', [PurchasesController::class, 'create'])->name('purchases.create');
Route::post('/purchases', [PurchasesController::class, 'store'])->name('purchases.store');
Route::get('/purchases/{product}/edit', [PurchasesController::class, 'edit'])->name('purchases.edit');
Route::put('/purchases/{product}', [PurchasesController::class, 'update'])->name('purchases.update');
Route::delete('/purchases/{product}', [PurchasesController::class, 'destroy'])->name('purchases.destroy');

Route::get('/customers', [CustomersController::class, 'index'])->name('customers.index');
Route::get('/customers/create', [CustomersController::class, 'create'])->name('customers.create');
Route::post('/customers', [CustomersController::class, 'store'])->name('customers.store');
Route::get('/customers/{product}/edit', [CustomersController::class, 'edit'])->name('customers.edit');
Route::put('/customers/{product}', [CustomersController::class, 'update'])->name('customers.update');
Route::delete('/customers/{product}', [CustomersController::class, 'destroy'])->name('customers.destroy');

Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory.index');
Route::get('/inventory/create', [InventoryController::class, 'create'])->name('inventory.create');
Route::post('/inventory', [InventoryController::class, 'store'])->name('inventory.store');
Route::get('/inventory/{product}/edit', [InventoryController::class, 'edit'])->name('inventory.edit');
Route::put('/inventory/{product}', [InventoryController::class, 'update'])->name('inventory.update');
Route::delete('/inventory/{product}', [InventoryController::class, 'destroy'])->name('inventory.destroy');


Route::get('/reports', [ReportsController::class, 'index'])->name('products.index');
Route::get('/reports/create', [ReportsController::class, 'create'])->name('products.create');
Route::post('/reports', [ReportsController::class, 'store'])->name('products.store');
Route::get('/reports/{product}/edit', [ReportsController::class, 'edit'])->name('products.edit');
Route::put('/reports/{product}', [ReportsController::class, 'update'])->name('products.update');
Route::delete('/reports/{product}', [ReportsController::class, 'destroy'])->name('products.destroy');



require __DIR__.'/auth.php';
