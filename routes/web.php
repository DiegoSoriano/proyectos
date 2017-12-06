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

use App\Task;

Route::get('/', function () {
    return view('tasks.welcome');
});

Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/{task}', 'TaskController@show');

Route::get('/posts', 'PostController@index');
Route::get('/posts/{post}', 'PostController@show');

Route::get('/blog', 'BlogController@index')->name('/home');
Route::get('/blog/create', 'BlogController@create');
Route::get('/blog/{blog}', 'BlogController@show');
Route::post('/blog', 'BlogController@store');
Route::post('/blog/{blog}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

// GET /posts
// GET /posts/create
// POST /posts
// GET /posts/{id}/edit
// GET /posts/{id}
// PATCH /posts/{id}
// DELETE /posts/{id}