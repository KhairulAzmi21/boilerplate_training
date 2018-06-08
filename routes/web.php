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
use App\Category;

Route::get('/', function () {
    $category = request()->category;
    //get only 4 post.
    $posts = App\Post::postCategory($category)->take(4)->inRandomOrder()->get();
    return view('welcome', compact('posts'));
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/impersonate/{id}', function ($id) {
    auth()->loginUsingId($id, true);
    return back();
});

Route::get('/posts', 'PostController@index')->name('posts');
Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::post('/posts', 'PostController@store')->name('posts');
Route::get('/posts/{id}', 'PostController@show')->name('posts.show');
Route::get('/posts/{id}/edit', 'PostController@edit')->name('posts.edit');
Route::put('/posts/{id}', 'PostController@update')->name('posts.update');
Route::delete('/posts/{id}', 'PostController@destroy')->name('posts.destroy');



Route::resource('profile', 'ProfileController');
Route::resource('users', 'UserController');
