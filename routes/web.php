<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// home
Route::get('/', [HomeController::class, 'getHome']);

// products (route prefix)
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [CategoryController::class, 'getFoodBeverage']);
    Route::get('/beauty-health', [CategoryController::class, 'getBeautyHealth']);
    Route::get('/home-care', [CategoryController::class, 'getHomeCare']);
    Route::get('/baby-kid', [CategoryController::class, 'getBabyKid']);
});

// user page (route parameter)
Route::get('/user/{id}/name/{name}', [UserController::class, 'getUser']);

// sales page
Route::get('/sales', [SalesController::class, 'getSales']);