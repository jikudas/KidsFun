<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

use DB;

class PostController extends Controller
{
    function index()
    {
        return view('admin.add_post');
    }

    public function save_post(Request $request)
    {   
        $data = array();
        $data['post_id'] = $request->post_id;
        $data['post_title'] = $request->post_title;
        $data['post_subtitle'] = $request->post_subtitle;
        $data['post_details'] = $request->post_details;
        
        DB::table('tbl_posts')->insert($data);

        Session::put('message', 'Post Submitted Successfully !');
        return Redirect::to('/add-post');
    }

    public function all_post()
    {
        $all_posts = DB::table('tbl_posts')->get();
        $manage_posts = view('admin.all_posts')
        ->with('all_posts', $all_posts);
        
        return view('admin_layout')
            ->with('admin.all_posts', $manage_posts);
    }

    public function full_post($post_id)
    {
        $single_posts_info = DB::table('tbl_posts')
            ->where('post_id', $post_id)
            ->first();

        $single_post = view('pages.full_post')
            ->with('single_post', $single_posts_info);

        return view('layout')
            ->with('pages.full_post', $single_post);
        
            //print_r($single_posts_info);
        // return view ('pages.full_post');
    }


}
