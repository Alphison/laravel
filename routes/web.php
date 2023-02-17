<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Middleware\AdminMiddleware;
use App\Models\User;
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

Route::controller(IndexController::class)->group(function (){
    Route::get('/', 'index')->name('home');


    Route::middleware('auth')->get('/articles/create', 'add')->name('article.create');
    Route::get('/blocked', 'blocked')->name('blocked');
    Route::get('/single', 'single');
    Route::get('/user', 'user');

});

//Route::middleware(['auth', AdminMiddleware::class])->controller(AdminController::class)->prefix('/admin')->group(function (){
//    Route::get('/create', 'createArticle')->name('admin.create');
//});

Route::get('article/{id}', [\App\Http\Controllers\ArticleController::class, 'show'])->name('single');
Route::post('article/create', [\App\Http\Controllers\ArticleController::class, 'store'])->name('article.createPost');

Route::controller(AuthController::class)->group(function (){
    Route::post('/signup', 'signup')->name('register');
    Route::post('/signin', 'signin')->name('login');
    Route::get('/exit', 'exit')->name('exit');
});
