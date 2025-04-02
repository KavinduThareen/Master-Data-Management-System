<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;




//Route::get('/', [AuthController::class, 'login']);



// Show login form
Route::get('/login', [AuthController::class, 'login'])->name('login');

// Handle login form submission
Route::post('/login', [AuthController::class, 'authenticate']);
