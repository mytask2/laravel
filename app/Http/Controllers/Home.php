<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Home extends Controller
{
    public function index(){
        
        return view('pages.index');
    }
    public function work(){
        
        return view('pages.work');
    }
     public function about(){
        
        return view('pages.about');
    }
     public function contact(){
        
        return view('pages.contact');
    }
}
