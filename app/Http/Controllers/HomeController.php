<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $products = DB::table('product')->get();
        return view('index', ['products' => $products]);
    }


}
