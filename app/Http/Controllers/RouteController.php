<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function product_category(){
        return view("admin.product.category.index");
    }
}
