<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function home (){
        return view('user.home');
    }

    public function getFunc(){
        return view('user.func');
    }
    
    public function getDashboard(){
        return view('user.dash');
    }
    public function getAbout(){
        return view('user.about');
    }
    public function home2 (){
        return view('user.home2');
    }
    public function index(){
        $products = DB::table('product')->where('price','>',500)->latest()->get();
        return view('user.index', ['products' => $products]);
    }

    public function getIntroduction(){
        return view('introduction');
    }


}