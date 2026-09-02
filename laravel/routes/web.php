<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[DashboardController::class,'index']);

// Products Routes
Route::get('/products',[ProductController::class,'index'])->name('products.index');
Route::get('/products/show/{id}',[ProductController::class,'show'])->name('products.show');
Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
Route::post('/products/store',[ProductController::class,'store'])->name('products.store');

Route::delete('/products/delete/{id}',[ProductController::class,'destroy'])->name('products.destroy');


Route::resource('users', UserController::class);
Route::resource('profiles', \App\Http\Controllers\ProfilesController::class);