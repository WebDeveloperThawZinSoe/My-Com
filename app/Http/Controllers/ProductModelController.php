<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\ProductModel;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProductModelController extends Controller
{
    //index
    public function index(){
        $categories = Category::get();
        $subCategories = SubCategory::get();
        return view('admin.product.productModel.index',compact('categories','subCategories'));
    }

    //create
    public function create(Request $request){
        $validation = $this->validationCheck($request);
        if($validation->fails()){
            return back()->withErrors($validation)->withInput();
        }
        $file = $request->file('productModelImage');
        $fileName = uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/productModelImage',$fileName);
        $data = $this->getData($request,$fileName);
        $data['image'] = $fileName;
        ProductModel::create($data);
        return redirect()->back()->with(['message' => 'Product Model Insert']);
    }

    //details
    public function details($id){
        $data = ProductModel::where('id',$id)->first();
        $cart = Cart::where('user_id',Auth::user()->id)->get();
        return view('website.product-detail',compact('data','cart'));
    }


    //get data
    private function getData($request,$fileName){
        return [
            'title' => $request->productModelName,
            'description' => $request->productModelDescription,
            'image' => $request->$fileName,
            'category_id' => $request->inputCategory,
            'sub_category_id' => $request->inputSubCategory

        ];
    }

    //validation
    private function validationCheck(Request $request){
        $validationRules = [
            'productModelName' => 'required',
            'productModelDescription' => 'required',
            'productModelImage' => 'required',
            'inputCategory' => 'required',
            'inputSubCategory' => 'required'
        ];
        return Validator::make($request->all(),$validationRules);
    }

}
