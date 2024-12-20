<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function __construct()
    {
        //
    }

    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }

    public function forex(){
        return view('forex');
    }
    public function equities(){
        return view('equities');
    }
    public function indices(){
        return view('indices');
    }
    public function commodities(){
        return view('commodities');
    }
    public function account(){
        return view('account');
    }
    public function tools(){
        return view('tools');
    }
    public function conditions(){
        return view('conditions');
    }
    public function forexglossary(){
        return view('forexglossary');
    }
    public function FAQ(){
        return view('FAQ');
    }

    public function login(){
        return view('login');
    }
    public function cryptocurrencies(){
        return view('cryptocurrencies');
    }
    public function Metatrader5(){
        return view('metatrader5');
    }
}
