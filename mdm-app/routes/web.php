<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;



//Route::get('/', [AuthController::class, 'login']);



// Public routes
Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected routes (only authenticated users)
Route::middleware('auth')->group(function () {
    Route::get('/dashbord', function () {
        return view('dashbord');
    })->name('dashbord');
});

// Admin routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashbord', [AdminController::class, 'index'])->name('admin.dashbord');
});



Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost']);









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
