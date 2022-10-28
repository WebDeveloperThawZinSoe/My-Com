<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RouteController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/admin/home' , [AdminController::class, 'home'])->name('admin#home');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    /* Admin Panel Slidebar */
    Route::get("/admin/home/product/category", [RouteController::class, 'product_category'])->name("admin#home#product#category");
});


