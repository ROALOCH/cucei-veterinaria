<?php

use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailsController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('auth')->group(function () {

    Route::delete('/Cart/clean', [CartController::class, 'clean'])->name('Cart.clean');
    Route::get('/Service', [ProductController::class, 'index'])->name('Service.index');
    Route::resource('/Appointements',AppointmentsController::class);
    Route::resource('/Cart', CartController::class);
    Route::resource('/Order',OrderController::class);
    Route::resource('/OrderDetails',OrderDetailsController::class);
    Route::resource('/Pet',PetController::class);
    Route::resource('/Product',ProductController::class);
    Route::resource('/Admin/User',UserController::class);

    Route::get('/search', [SearchController::class, 'search']);

});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
