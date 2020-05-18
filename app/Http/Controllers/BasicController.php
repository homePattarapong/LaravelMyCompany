<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    // Function Home
    public function home(){
        return view('pages.home');
    }

    // Function About
    public function about(){
        return view('pages.about');
    }

    // Function Service
    public function service(){
        return view('pages.service');
    }

    // Function Contact
    public function contact(){
        return view('pages.contact');
    }

    // Function Login
    public function login(){
        return view('pages.login');
    }

}
