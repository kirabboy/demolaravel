<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $products = DB::table('product')->where('price','>',5000000)->latest()->get();
        return view('index', ['products' => $products]);
    }

    public function getIntroduction(){
        return view('introduction');
    }

}
