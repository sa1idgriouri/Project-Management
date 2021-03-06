<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\HomeController;


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



Route::get('/', 'HomeController@index');
Route::get('/post/{id}', 'HomeController@show')->name("post.show");
Route::get("/post", 'HomeController@create')->name("post.create");
Route::get("/edit/post/{id}", 'HomeController@edit')->name("post.edit");


Route::post("/add/post", 'HomeController@createPost')->name("post.createPost");
Route::put("/update/post/{id}", 'HomeController@update')->name("post.update");
Route::delete("/update/post/{id}", 'HomeController@delete')->name("post.delete");
