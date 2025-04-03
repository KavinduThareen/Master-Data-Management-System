<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\DashbordController;

use App\Http\Controllers\ItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/', [AuthController::class, 'login']);


Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/refresh', [AuthController::class, 'refresh']);

Route::middleware('auth:api')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
});


Route::middleware('auth:api')->get('/dashboard', function () {
    return response()->json(['message' => 'Welcome to your dashboard!']);
});

Route::get('/', function () {
    return view('auth.login'); // Show login form
})->name('login');


Route::middleware('auth:api')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
});

Route::middleware('auth:api')->get('/dashbord', function (Request $request) {
    return response()->json([
        'message' => 'Welcome to your dashboard!',
        'user' => $request->user()
    ]);
});


Route::middleware('auth')->group(function () {
    Route::get('/admin-panel', function () {
        // Admin panel content
        return view('admin.dashbord');
    })->middleware('is_admin');
});


Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/dashboard', [DashbordController::class, 'dashbord'])->name('dashboard');


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');


Route::post('/register', [AuthController::class, 'register']);

Route::get('/dashbord', [DashbordController::class, 'dashbord']);







Route::get('/brands', [BrandsController::class, 'brands'])->name('brands');

Route::post('/brands', [BrandsController::class, 'store'])->name('brands.store');

Route::delete('/brands/{brand}', [BrandsController::class, 'destroy'])->name('brands.destroy');

//Route::patch('/brands/{id}', [BrandsController::class, 'update'])->name('brands.update');






Route::get('/categories', [CategoryController::class, 'categories'])->name('categories');

Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');

Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');






Route::get('/items', [ItemController::class, 'items'])->name('items');
Route::post('/items', [ItemController::class, 'store'])->name('items.store');
Route::delete('/items/{id}', [ItemController::class, 'destroy'])->name('items.destroy');
