<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //show product models
    public function show(){
        $productModels = ProductModel::orderBy('id','desc')->get();
        return view('website.index',compact('productModels'));
    }
}
