<?php

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


Route::middleware(['auth'])->group(function () {
    Route::resource('/Appointements', [AppointmentsControlller::class]);
    Route::resource('/Cart', [CartController::class]);
    Route::resource('/CartDetail', [CartDetailController::class]);
    Route::resource('/Order', [OrderController::class]);
    Route::resource('/OrderDetails', [OrderDetailsController::class]);
    Route::resource('/Pet', [PetController::class]);
    Route::resource('/Product', [ProductController::class]);
});
