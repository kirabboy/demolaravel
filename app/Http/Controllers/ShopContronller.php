<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function index(){
        $products = DB::table('product')->where('id','>',1)->latest()->get();
        return view('user.index', ['products' => $products]);
        
    }

    public function getIntroduction(){
        return view('introduction');
    }

}