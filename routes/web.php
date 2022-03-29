<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/','pages.index');
Route::view('/about','pages.about');
Route::view('/services','pages.services');
Route::view('/project','pages.project');
Route::view('/blog','pages.blog');
Route::view('/contact','pages.contact');