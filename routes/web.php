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

Route::get('/', function () {
    // return view('welcome');
    return 'sdfsdf';
});

Route::get('/users', function () {
    // return view('welcome');
    return 'users';
});

Route::get('/users/{id}', function ($id) {
    // return view('welcome');
    return 'users'. $id;
});

Route::get('/books', function () {
    // return view('welcome');
    return 'все книги';
});

Route::get('/books/{id}', function ($id) {
    // return view('welcome');
    return 'книга'. $id;
});