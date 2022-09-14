<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

use DB;

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

    public function story_books()
    {
        return view('free_books.story');
    }

    public function pdf_details()
    {
        return view('pages.pdf_details');
    }
}
