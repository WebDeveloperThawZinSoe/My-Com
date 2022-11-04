<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::OrderBy('id', 'desc')->get();
        $subCategories = SubCategory::OrderBy('id', 'desc')->paginate(5);
        return view("admin.product.subcategory.index",compact('categories','subCategories'));
    }

    //create
    public function create(Request $request){
        // validation
        $validation = $this->subCategoryValidation($request);
        if($validation->fails()){
            return back()->withErrors($validation)->withInput();
        }

        //get data
         $data = $this->getSubCategoryData($request);
        // // dd($data);
        // //creation
        $result = SubCategory::create($data);
        //dd($result);
         return redirect()->route("admin#subcategory")->with(['message' => 'SubCategory Create Success']);
    }

    //update
    public function update(Request $request){
       // validation
        $this->subCategoryValidation($request);

        $data = $this->getSubCategoryData($request);
        // dd($data);

       SubCategory::where('id',$request->subCategoryId)->update($data);
       return redirect()->route('admin#subcategory')->with(['message'=>'Updated Successfully']);
    }

    //delete
    public function delete($id){
        SubCategory::where('id',$id)->delete();
        return back()->with(['message'=>'Delete successfully']);
    }

    //get subCategoryData
    private function getSubCategoryData($request){
        return [
            'category_id' => $request->category,
            'name' => $request->categoryName,
            'created_at' => Carbon::now()
        ];
    }

    //subcategory validation
    private function subCategoryValidation($request){
        $validationRules = [
            'category' => 'required',
            'categoryName' => 'required'
        ];

        return Validator::make($request->all(),$validationRules);
    }
}
