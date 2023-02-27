<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PwlController extends Controller
{
    public function index(){
        return view('');
    }
    public function home(){
        return view('home');
    }
    public function product(){
        return view('product');
    }
    public function news($id){
        return view('news', ['angka'=>$id]);
    }
    public function program(){
        return view('program');
    }
    public function aboutUs(){
        return view('about-us');
    }
    public function contactUs(){
        return view('contact-us');
    }
}
