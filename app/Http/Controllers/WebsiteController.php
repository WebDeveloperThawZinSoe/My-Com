<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
{
    //show product models
    public function show(){
        $productModels = ProductModel::orderBy('id','desc')->get();
        $cart = Cart::where('user_id',Auth::user()->id)->get();
        return view('website.index',compact('productModels','cart'));
    }
}
