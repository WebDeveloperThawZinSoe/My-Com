<?php

namespace App\Http\Controllers;

use App\Exports\VendorExport;
use App\Imports\VendorImport;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class VendorController extends Controller
{
    //vendor home
    public function home()
    {
        $vendors = Vendor::orderBy('id', 'DESC')->when(request('key'), function($query){
                        $query->where('name', 'like', '%'.request('key').'%')
                        ->OrWhere('phone', 'like', '%'.request('key').'%')
                        ->OrWhere('email', 'like', '%'.request('key').'%')
                        ->OrWhere('website', 'like', '%'.request('key').'%')
                        ->OrWhere('address', 'like', '%'.request('key').'%');
                    })->paginate(10);
                    $vendors->appends(request()->all());
        return view('admin.vendor.index', compact('vendors'));
    }

    //vendor details
    public function details()
    {
        return view('admin.vendor.detail');
    }

    //create
    public function create()
    {
        return view('admin.vendor.create');
    }

    //create
    public function vendorCreate(Request $request)
    {
        $this->dataValidate($request);
        $data = $this->getData($request);
        Vendor::create($data);
        return redirect()->route('admin#vendor')->with(['message' => 'Vendor Create Success']);
    }

    //update page
    public function update($id)
    {
        $vendor = Vendor::where('id', $id)->first();
        return view('admin.vendor.update', compact('vendor'));
    }

    //update
    public function vendorUpdate(Request $request)
    {
        $this->dataValidate($request);
        $data = $this->getData($request);
        Vendor::where('id', $request->vendorId)->update($data);
        return redirect()->route('admin#vendor')->with(['message' => 'Vendor Update Success']);
    }

    //delete
    public function delete(Request $request)
    {
            Vendor::where('id', $request->id)->delete();
            return back()->with(['message' => 'Vendor Delete Success']);
    }


    //get Data
    private function getData($request)
    {
        return [
            'name' => $request->vendorName,
            'phone' => $request->vendorPhone,
            'email' => $request->vendorEmail,
            'website' => $request->vendorWebsite,
            'address' => $request->vendorAddress
        ];
    }

    //validation
    private function dataValidate($request){
        Validator::make( $request->all() ,[
            'vendorName' => 'required|unique:vendors,name',
            'vendorPhone' => 'required|unique:vendors,phone,'.$request->vendorId, //သူ့ id က မဟုတ်ရင် phone တူလို့မရပါဘူး
            'vendorEmail' => 'required|unique:vendors,email,'.$request->vendorId, //သူ့ id က မဟုတ်ရင် email တူလို့မရပါဘူး
            'vendorWebsite' => 'unique:vendors,website,'.$request->vendorId, // သူ့ id က မဟုတ်ရင် website လဲ တူလို့မရပါဘူး
            'vendorAddress' => 'required'
        ])->validate();
    }

    //export
    public function export(){
        $currentTime = Carbon::now();
        return Excel::download(new VendorExport,"vendor_$currentTime.xlsx");
    }

    //import
    public function import(){
       Excel::import(new VendorImport,request()->file('file'));
       return back()->with(['message' => 'Excel Import Success']);
    }

    //Delete All
    // public function deleteAll(Request $request)
    // {
    //     $ids = $request->ids;
    //     Vendor::whereIn('id',explode(",",$ids))->delete();
    //     return response()->json(['success'=>"Products Deleted successfully."]);
    // }

    //multiDelete
    // public function multiDelete(Request $request) 
    // {
    //     Vendor::whereIn('id', $request->get('selected'))->delete();
    
    //     return response("Selected post(s) deleted successfully.", 200);
    // }
}
