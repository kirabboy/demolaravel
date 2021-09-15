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
    

    public function getIntro(){
        return view('introduction');
    }

    public function product($slug){        
        $product = DB::table('product')->where('slug',$slug)->latest()->first();
        return view('user.product', ['product' => $product]);
    }

}
