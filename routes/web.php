<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyProjectController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/blog',[MyProjectController::class,'blog'])->name('blog');
Route::get('/add-blog',[MyProjectController::class,'add_blog'])->name('add.blog');
Route::post('/store-blog',[MyProjectController::class,'store_blog'])->name('store.blog');
Route::get('/blog-details/{id}',[MyProjectController::class,'blog_details'])->name('blog.details');
Route::get('/blog-delete/{id}',[MyProjectController::class,'blog_delete'])->name('blog.delete');
//
