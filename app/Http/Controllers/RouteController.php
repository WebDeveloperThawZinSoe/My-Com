<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function product_category(){
        return view("admin.product.category.index");
    }

    
    public function product_subcategry(){
        return view("admin.product.subcategory.index");
    }

    public function product(){
        return view("admin.product.category.index");
    }

    public function product_create(){
        return view("admin.product.category.index");
    }
}
