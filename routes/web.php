<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProductModelController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\WebsiteController;
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

Route::get('/', [WebsiteController::class,'show'])->name('website#home');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get("/main/dashboard",function(){
        return view("dashboard");
    });

    Route::fallback([RouteController::class,"error_404"])->name("error_404");

    Route::get('/admin/home', [AdminController::class, 'home'])->name('admin#home');
    Route::get('/dashboard', function () {
        // return redirect()->route('admin#home#product#category');
        return view("admin.home.index");
    })->name('dashboard');

    /* Admin Panel Slidebar */
    Route::group(['prefix' => 'home'], function () {
        //category
        // Route::group(['prefix' => 'product'], function () {
        //     Route::get("category", [RouteController::class, 'product_category'])->name("home#product#category");
        //     Route::get("category/subcategory", [RouteController::class, 'product_subcategry'])->name("home#product#category#subcategory");
        //     Route::get("/", [RouteController::class, 'product_index'])->name("home#product");
        //     Route::get("create", [RouteController::class, 'product_create'])->name("home#product#create");
        // });

        //category
        Route::group(['prefix' => 'category'], function(){
            //create and list page
            Route::get('/home', [CategoryController::class, 'home'])->name('admin#category#home');
            Route::post('/home/create', [CategoryController::class, 'create'])->name('admin#category#create');
            Route::post('delete', [CategoryController::class, 'delete'])->name('admin#category#delete');

            //update
            Route::post('/update', [CategoryController::class, 'update'])->name('admin#category#update');

            //subcategory
            Route::get("/subcategory", [SubCategoryController::class, 'index'])->name("admin#subcategory");
            //create
            Route::post('/subcategory/create',[SubCategoryController::class,'create'])->name('admin#subcategory#create');
            // //delete
            Route::get('/subcategory/delete/{id}',[SubCategoryController::class,'delete'])->name('admin#subcategory#delete');

            //update
            Route::post('subcategory/update',[SubCategoryController::class,'update'])->name('admin#subcategory#update');

        });

        //product
        Route::prefix('product')->group(function () {
            Route::get('/model',[ProductModelController::class,'index'])->name('admin#productModel');
            Route::post('/create',[ProductModelController::class,'create'])->name('admin#productModel#create');
            Route::get('/details/{id}',[ProductModelController::class,'details'])->name('admin#productModel#details');

            //add to cart with ajax
            Route::get('/ajax/addtocart',[CartController::class,'addToCart'])->name('user#addToCart');
        });


        //purchase
        Route::group(["prefix"=>"purchase"],function(){
            Route::get("", [PurchaseController::class, 'index'])->name("admin#purchase");
            Route::get("create", [PurchaseController::class, 'createPage'])->name("admin#purchase#createPage");
            Route::post('create', [PurchaseController::class, 'create'])->name('admin#purchase#create');
        });

        //vendor
        Route::group(['prefix' => 'vendor'], function(){
            Route::get('', [VendorController::class, 'home'])->name('admin#vendor');
            Route::get('details', [VendorController::class, 'details'])->name('admin#vendor#details');

            //vendor create
            Route::get('/create', [VendorController::class, 'create'])->name('admin#vendor#create#route');
            Route::post('/create', [VendorController::class, 'vendorCreate'])->name('admin#vendor#create');

            //vendor update
            Route::get('/update/{id}', [VendorController::class, 'update'])->name('admin#vendor#update#route');
            Route::post('/update/', [VendorController::class, 'vendorUpdate'])->name('admin#vendor#update');

            //vendor delete
            Route::post('/delete', [VendorController::class, 'delete'])->name('admin#vendor#delete');

            //vendor excel export
            Route::get("/export", [VendorController::class, 'export'])->name("vendor#excel#export");

            //vendor excel import
            Route::post("/import", [VendorController::class, 'import'])->name("vendor#excel#import");

            //Route::delete('/VendorDeleteAll',[VendorController::class,'deleteAll'])->name('vendor#all#delete');
            // Route::post('/multi-delete', [VendorController::class, 'multiDelete'])->name('vendor#multi#delete');
        });

        //Partner
        Route::group(['prefix' => 'partner'], function(){
            Route::get('', [PartnerController::class, 'index'])->name('admin#partner');
            Route::get('/create', [PartnerController::class, 'create'])->name('admin#partner#create');
            Route::post("/create",[PartnerController::class, 'store']);
        });
    });
});


Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
