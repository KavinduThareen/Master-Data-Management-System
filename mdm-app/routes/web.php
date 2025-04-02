<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\DashbordController;
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

