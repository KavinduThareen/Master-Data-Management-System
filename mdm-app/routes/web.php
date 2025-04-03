<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\DashbordController;

use App\Http\Controllers\ItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;















//Route::post('/register', [AuthController::class, 'registerPost']);
Route::post('/login', [AuthController::class, 'login']);

//Route::post('/login', [AuthController::class, 'authenticate']);  // Duplicate

Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/refresh', [AuthController::class, 'refresh']);

Route::middleware('auth:api')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
});


Route::middleware('auth:api')->get('/dashboard', function () {
    return response()->json(['message' => 'Welcome to your dashboard!']);
});

Route::get('/login', function () {
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


//Route::middleware('auth')->group(function () {
//    Route::get('/dashboard', function () {
//        // User dashboard content
//        return view('user.dashbord');
//    });
//});


Route::get('/register', function () {
    return view('auth.register');
})->name('register');


//
//Route::middleware(['auth', 'admin'])->group(function () {
//    Route::get('/admin/dashboard', [AuthController::class, 'index'])->name('admin.dashboard');
//});
//









Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

















// Public routes


//Route::get('/login', [AuthController::class, 'login'])->name('login');


//
//Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
//uncomment



// Handle login form submission

//Route::post('/login', [AuthController::class, 'authenticate']);





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
