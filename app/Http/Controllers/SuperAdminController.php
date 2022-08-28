<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

use DB;

class SuperAdminController extends Controller
{
    public function logout()
    {
        // Session::put('admin_name', null);
        // Session::put('admin_id', null);

        Session::flush();
        return Redirect::to('/admin');
    }
}
