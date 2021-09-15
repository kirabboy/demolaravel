<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $products = DB::table('product')->get();
        return view('user.index', ['products' => $products]);
    }

    public function getDashboard(){
        return view('user.dashboard');
    }

    public function getfuncNtoken(){
        return view('user.funcNtoken');
    }
    
    public function getaboutus(){
        return view('user.aboutus');
    }

}
