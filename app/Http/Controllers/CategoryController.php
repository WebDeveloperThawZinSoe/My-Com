<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{

    //home and create
    public function home(){
        $categories = Category::OrderBy('id', 'desc')
        ->paginate(5);
        return view("admin.product.category.index", compact('categories'));
    }

    //category create
    public function create(Request $request)
    {
        $this->dataValidation($request);
        $data = $this->getData($request);
        if($request->hasFile('logo')){
            $fileName = uniqid().$request->file('logo')->getClientOriginalName();
            $request->file('logo')->storeAs('public/category/', $fileName);
            $data['image'] = $fileName;
        }

        Category::create($data);
        return back()->with(['message' => 'Category Insert Success']);
    }

    //delete
    public function delete(Request $request)
    {
        $image = Category::where('id', $request->id)->first();
        $image = $image->image;
        if($image != null){
            Storage::delete('/public/category/'. $image);
        }
        Category::where('id', $request->id)->delete();
        return back()->with(['message' => 'Deleted successfully']);
    }

    //update
    public function update(Request $request)
    {
        $this->dataValidation($request);
        $data = $this->getData($request);
        if($request->hasFile('logo')){
            $dbImage = Category::where('id', $request->categoryId)->first();
            $dbImage = $dbImage->image;
            if($dbImage != null){
                Storage::delete('/public/category/'.$dbImage);
            }
            $fileName = uniqid().$request->file('logo')->getClientOriginalName();
            $request->file('logo')->storeAs('/public/category/', $fileName);
            $data['image'] = $fileName;
        }
        Category::where('id', $request->categoryId)->update($data);
        return redirect()->route('admin#category#home')->with(['message' => 'Updated Successfully']);
    }

    //get data
    private function getData($request){
        return [
            'name' => $request->categoryName,
            'description' => $request->categoryDescription
        ];
    }

    //validation
    private function dataValidation($request){
        Validator::make($request->all(),[
            'categoryName' => 'required|unique:categories,name,'.$request->categoryId,
            'categoryDescription' => 'required'
        ])->validate();
    }
}
