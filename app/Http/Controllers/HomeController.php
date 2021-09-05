<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
