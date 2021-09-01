<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('user.index');
    }
    public function Dashboard(){
        return view('user.Dashboard');
    }
    public function Function(){
        return view('user.Function');
    }
    public function About(){
        return view('user.About');
    }

}
