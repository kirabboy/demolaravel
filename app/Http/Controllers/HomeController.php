<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('user.index');
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
