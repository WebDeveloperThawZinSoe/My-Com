<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //home
    public function home()
    {
        return view('admin.home.home');
    }
}
