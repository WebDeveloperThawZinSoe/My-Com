<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.partner.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.partner.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->dataValidation($request);
        // $data = $this->getData($request);
        // if($request->hasFile('logo')){
        //     $fileName = uniqid().$request->file('logo')->getClientOriginalName();
        //     $request->file('logo')->storeAs('public/partner/', $fileName);
        //     $data['image'] = $fileName;
        // }

        // Partner::create($data);
        return back()->with(['message' => 'Partner Create Success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        //
    }

    //get data
    private function getData($request)
    {
        return [
            'name' => $request->name,
            'phone' => $request->phone,
            'password' =>  Hash::make($request->password),
            'refer_point' => $request->refer_point,
            'refer_code' => $request->refer_code,
            'address' => $request->address
        ];
    }

    //validation
    private function dataValidation($request)
    {
        Validator::make($request->all(), [
            'name' => 'required|unique:partners,name,' . $request->partnerId,
            'phone' => 'required|unique:partners,phone' . $request->partnerId,
            'refer_point' => 'required',
            'refer_code' => 'required|unique:partners,refer_code' . $request->partnerId,
            'address' => 'required',
            'logo' => "required",
            "password" => "required"
        ])->validate();
    }
}
