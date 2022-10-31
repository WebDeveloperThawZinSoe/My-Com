<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\PartnerController;
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

    Route::get('/admin/home', [AdminController::class, 'home'])->name('admin#home');
    Route::get('/dashboard', function () {
        // return redirect()->route('admin#home#product#category');
        return view("admin.home.index");
    })->name('dashboard');

    /* Admin Panel Slidebar */
    Route::group(['prefix' => 'home'], function () {
        //category
        Route::group(['prefix' => 'product'], function () {
            Route::get("category", [RouteController::class, 'product_category'])->name("home#product#category");
            Route::get("category/subcategory", [RouteController::class, 'product_subcategry'])->name("home#product#category#subcategory");
            Route::get("/", [RouteController::class, 'product_index'])->name("home#product");
            Route::get("create", [RouteController::class, 'product_create'])->name("home#product#create");
        });

        //vendor
        Route::group(['prefix' => 'vendor'], function(){
            Route::get('', [VendorController::class, 'home'])->name('admin#vendor');
            Route::get('details', [VendorController::class, 'details'])->name('admin#vendor#details');
            Route::get('/create', [VendorController::class, 'create'])->name('admin#vendor#create');
        });

        //Partner
        Route::group(['prefix' => 'partner'], function(){
            Route::get('', [PartnerController::class, 'index'])->name('admin#partner');
            Route::get('/create', [PartnerController::class, 'create'])->name('admin#partner#create');
        });
    });
});
