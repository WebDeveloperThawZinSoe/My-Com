<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    //vendor home
    public function home()
    {
        return view('admin.vendor.home');
    }

    //vendor details
    public function details()
    {
        return view('admin.vendor.detail');
    }
}
