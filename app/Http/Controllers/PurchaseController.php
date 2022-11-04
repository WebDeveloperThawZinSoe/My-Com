<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view("admin.purchase.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPage()
    {
        $vendors = Vendor::get();
        return view("admin.purchase.create",compact('vendors'));
    }

    //create
    public function create(Request $request)
    {
        $this->dataValidate($request);
        $data = $this->getData($request);
        $res = $this->imageUpload($request->voucherImages, $request->translationImage);
        $data['voucher_images'] = $res['v'];
        $data['translation_image'] = $res['t'];
        Purchase::create($data);
        return redirect()->route('admin#purchase')->with(['message' => 'Created Successfully']);
    }


    //validation
    private function dataValidate($request){
        Validator::make($request->all(), [
            'voucherId' => 'required|unique:purchases,voucher_id,'.$request->id,
            'vendorId' => 'required',
            'qty' => 'required',
            'total' => 'required',
            'paymentMethod' => 'required',
            'translationId'=> 'required|unique:purchases,translation_id,'.$request->id,
            'voucherImages' => 'required',
            'translationImage' => 'required'
        ])->validate();
    }

    //getData
    private function getData($request){
        return [
            'voucher_id' => $request->voucherId,
            'vendor_id' => $request->vendorId,
            'qty' => $request->qty,
            'total' => $request->total,
            'payment_method' => $request->voucherId,
            'translation_id' => $request->translationId
        ];
    }

    //images upload
    private function imageUpload($voucher, $translation){
        $v = array();
        $ret = array();
        if($voucher_images = $voucher){
            foreach($voucher_images as $image){
                $fileName = uniqid().$image->getClientOriginalName();
                $image->storeAs('public/voucher_images', $fileName);
                $v[] = $fileName;
            }
            $ret['v'] = implode('|', $v);
        }
        if($translation_img = $translation){
            $fileName = uniqid().$translation->getClientOriginalName();
            $translation->storeAs('public/translation_image', $fileName);
            $ret['t'] = $fileName;
        }
        return $ret;
    }

}
