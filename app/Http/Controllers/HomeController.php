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

    // function detail(){
    //     $products = DB::table('product')->get();
    //     foreach ($products as $product) {
    //         echo $products->name;
    //     }
    // }

    // public function detail($lug){
    //     $detail = DB::orderBy('id')->get();
    //     return view('user.detail')->with(compact('detail'));
    // }

}
