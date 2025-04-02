<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;



//Route::get('/', [AuthController::class, 'login']);



// Show login form
Route::get('/login', [AuthController::class, 'login'])->name('login');

// Handle login form submission
Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/dashbord', [DashbordController::class, 'dashbord']);

//Route::match(['get', 'post'], '/brands', [BrandsController::class, 'brands'])->name('brands');


Route::get('/brands', [BrandsController::class, 'brands'])->name('brands');

Route::post('/brands', [BrandsController::class, 'store'])->name('brands.store');

Route::delete('/brands/{brand}', [BrandsController::class, 'destroy'])->name('brands.destroy');





Route::get('/categories', [CategoryController::class, 'categories'])->name('categories');

Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');

Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');







Route::get('/items', [ItemController::class, 'items'])->name('items');
Route::post('/items', [ItemController::class, 'store'])->name('items.store');
Route::delete('/items/{id}', [ItemController::class, 'destroy'])->name('items.destroy');
