<?php

use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailsController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ProductController;
use App\Models\CartDetail;
use Illuminate\Auth\Events\Login;
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
    return view('welcome');
});


Route::get('/login', function () {
    return view('welcome');
})->name("login");


Route::middleware('auth')->group(function () {
    Route::resource('/Appointements',AppointmentsController::class);
    Route::resource('/Cart', CartController::class);
    Route::resource('/CartDetail',CartDetail::class);
    Route::resource('/Order',OrderController::class);
    Route::resource('/OrderDetails',OrderDetailsController::class);
    Route::resource('/Pet',PetController::class);
    Route::resource('/Product',ProductController::class);
});
