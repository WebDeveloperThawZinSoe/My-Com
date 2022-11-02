<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{

    public function product_subcategry(){
        return view("admin.product.subcategory.index");
    }

    public function product(){
        return view("admin.product.category.index");
    }

    public function product_create(){
        return view("admin.product.create");
    }


    public function product_index(){
        return view("admin.product.index");
    }

    public function error_404(){
        return view("admin.404");
    }
}
