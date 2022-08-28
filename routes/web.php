<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Frontend Routes================
Route::get('/', [HomeController::class, 'index']);

// Blog Related Routes
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/full-post', [HomeController::class, 'full_post']);






//Backend Routes===================
Route::get('/logout', [SuperAdminController::class, 'logout']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::post('/admin-dashboard', [AdminController::class, 'dashboard']);


//Category related routes===========
Route::get('/add-category',[CategoryController::class, 'index']);
Route::get('/all-category',[CategoryController::class, 'all_category']);