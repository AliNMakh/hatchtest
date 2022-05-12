<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ArticleController;
use App\Models\Article;

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
    $articles = Article::latest()->take(3)->get();
    return view('welcome',compact('articles'));
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(["middleware" => ["checkadmin"]], function(){
    Route::get('/admin', [App\Http\Controllers\adminController::class, 'index'])->name('admin');
    Route::get('/articles', [App\Http\Controllers\adminController::class, 'index']);
    Route::resource('articles', ArticleController::class);
 });

