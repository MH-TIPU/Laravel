<?php

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

Route::get('/', function () {
    return view('welcome',['title' => 'Home']);
});


Route::get('/newPost', function () {

    $categorys =  \App\Category::all();
    $title = "Create Post";
    return view('pages.newPost', compact('categorys','title'));
});

Route::get('/newCategory', function () {
    return view('pages.newCategory', ['title' => 'New Category']);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('post', 'PostController@index');
Route::post('post', 'PostController@create');
Route::get('post/{id}', 'PostController@show');
Route::post('post/store', 'PostController@store');
Route::get('post/{id}/edit', 'PostController@edit');
Route::patch('post/{id}', 'PostController@update');
Route::get('post/{id}/delect', 'PostController@destroy');


//Route::resource('/post', 'PostController');
//Route::resource('/category', 'CategoryController');


Route::get('category', 'CategoryController@index');
Route::post('category', 'CategoryController@create');
Route::get('category/{id}', 'CategoryController@show');
Route::post('category/store', 'CategoryController@store');
Route::get('category/{id}/edit', 'CategoryController@edit');
Route::patch('category/{id}', 'CategoryController@update');
Route::get('category/{id}/delect', 'CategoryController@destroy');
