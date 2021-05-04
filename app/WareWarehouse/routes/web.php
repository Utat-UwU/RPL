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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'App\Http\Controllers\PagesController@welcome');
Route::get('/login', 'App\Http\Controllers\PagesController@login');
Route::get('/contact', 'App\Http\Controllers\PagesController@contact');
Route::get('/register', 'App\Http\Controllers\PagesController@register');

Route::resource('to_dos', 'App\Http\Controllers\ToDoController');

Route::get('/about', function () {
    //return view('welcome');
    return view('pages.about');
});
Route::get('/users/{id}', function ($id) {
    //return view('welcome');
    return 'This is me, ' .$id;
});

