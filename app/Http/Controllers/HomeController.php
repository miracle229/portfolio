<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $name = "Miracle BOCOVO";
        return view('index',['name'=>$name]);
    }

    public function about(){
        $name = "Miracle BOCOVO";
        return view('about',['name'=>$name]);
    } 

    public function skills(){
         return view('skills');
    }

    public function services(){
        return view('services');
    }

    public function portfolio(){
        return view('portfolio');
    }
}
