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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/home', 'HomeController');

Route::get('/posts', function () {
    return view('posts.index');
});

Route::get('/posts/create', function () {
    return view('posts.create');
});

Route::post('/posts', function () {
    // Fetch the request
    // Do a validation
    // Store to database
    // Return back with message
});

Route::get('/impersonate/{id}', function ($id) {
    auth()->loginUsingId($id, true);
    return back();
});

Route::delete('/posts/{id}', function () {
    //fetch the id
    //delete
    //redirect to specific page
});

Route::put('/posts/{id}', function () {
    //fetch the id
    //update
    //redirect to specific page
});

Route::get('/posts/{id}', function () {
    return view('posts.show');
});

Route::get('/posts/{id}/edit', function () {
    return view('posts.edit');
});

Route::get('/profile', function () {
    return view('profile.index');
});

Route::get('/users', function () {
    return view('users.index');
});
