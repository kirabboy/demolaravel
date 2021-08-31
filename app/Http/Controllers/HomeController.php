<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('content.index');
    }
    public function getDasboard(){
        return view('content.dasboard');
    }

    public function getFaT(){
        return view('content.FaT');
    }
    public function getAbout(){
        return view('content.About');
    }
    public function getComm(){
        return view('content.Community');
    }
}
