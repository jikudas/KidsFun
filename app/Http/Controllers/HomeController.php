<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
    
    public function blog()
    {
        return view('pages.blog');
    }

    public function full_post()
    {
        return view('pages.full_post');
    }
}
