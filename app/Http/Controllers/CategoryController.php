<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

use DB;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.add_category');
    }

    public function all_category()
    {
        $all_category_info = DB::table('tbl_category')->get();
        $manage_category = view('admin.all_category')
            ->with('all_category_info', $all_category_info);

        return view('admin_layout')
            ->with('admin.all_category', $manage_category);

        // return view('admin.all_category');  
    }

    public function save_category(Request $request)
    {
        $data = array();
        $data['category_id'] = $request->category_id;
        $data['category_name'] = $request->category_name;
        
        DB::table('tbl_category')->insert($data);
        Session::put('message', 'Category Added Successfully!!');
        return Redirect::to('/add-category');
    }

    public function edit_category($category_id)
    {
        $category_info = DB::table('tbl_category')
            ->where('category_id', $category_id)
            ->first();
        
        $category_info = view('admin.edit_category')
            ->with('category_info', $category_info);

        return view('admin_layout')
            ->with('admin.edit_category', $category_info);
        //return view('admin.edit_category');
    }

    public function update_category(Request $request, $category_id)
    {
        $data = array();
        $data['category_id'] = $request->category_id;
        $data['category_name'] = $request->category_name;
         DB::table('tbl_category')
            ->where('category_id', $category_id)
            ->update($data);
        Session::get('message', 'Category Updated Successfully !');
        return Redirect::to('/all-category');
    }

    public function delete_category($category_id)
    {
        DB::table('tbl_category')
            ->where('category_id', $category_id)
            ->delete();

        Session::get('message', 'Category Deleted Successfully !');
        return Redirect::to('/all-category');
    }
}
