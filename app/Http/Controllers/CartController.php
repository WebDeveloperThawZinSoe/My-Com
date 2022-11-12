<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //add to cart
    public function addToCart(Request $request){
        $data = $this->getData($request);
        // logger($data);
        Cart::create($data);
        return response()->json([
            'status' => "success",
            'message' => 'add to cart complete'
        ],200);

    }

    //get data
    private function getData($request){
        return [
            'user_id' => $request->userId,
            'product_id' => $request->productId,
            'qty' => $request->orderCount,
        ];
    }

}
