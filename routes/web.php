<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

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

//Frontend Routes===========
Route::get('/', [HomeController::class, 'index']);

// Blog Related Routes
Route::get('/blog', [HomeController::class, 'all_post']);
Route::get('/story_books', [HomeController::class, 'story_books']);
Route::get('/pdf-details', [HomeController::class, 'pdf_details']);



//Backend Routes===========
Route::get('/logout', [SuperAdminController::class, 'logout']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::post('/admin-dashboard', [AdminController::class, 'dashboard']);


//Category related routes===========
Route::get('/add-category',[CategoryController::class, 'index']);
Route::get('/all-category',[CategoryController::class, 'all_category']);
Route::post('/save-category',[CategoryController::class, 'save_category']);
Route::get('/edit-category/{category_id}',[CategoryController::class, 'edit_category']);
Route::post('/update-category/{category_id}',[CategoryController::class, 'update_category']);
Route::get('/delete-category/{category_id}',[CategoryController::class, 'delete_category']);

// Post Related routes===========
Route::get('/add-post',[PostController::class, 'index']);
Route::post('/save-post',[PostController::class, 'save_post']);
Route::get('/all-post',[PostController::class, 'all_post']);
Route::get('/full-post/{post_id}', [PostController::class, 'full_post']);