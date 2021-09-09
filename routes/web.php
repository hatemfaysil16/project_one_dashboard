<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CKEditorController;

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
Route::get('/',[PagesController::class,'index']);


Route::get('/about',[PagesController::class,'about']);


Route::get('/name',[PagesController::class,'index']);

Route::resource('posts', PostsController::class);





Route::post('/posts/create',[PostsController::class,'store'])->name('posts.create');

Route::put('/posts/{id}/edit',[PostsController::class,'update'])->name('posts.id.edit');



Route::get('/proLanguage',[PagesController::class,'proLanguage']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



