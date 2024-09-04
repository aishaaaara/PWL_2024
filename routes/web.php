<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\HomeConstroller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//prak 1
Route::get('/', function () {
    return view('welcome');
});

// Route ::get('/hello', function(){
//     return 'hello world';
// });

Route ::get('/world', function(){
    return 'world';
});

Route ::get('/', function(){ 
    return 'Selamat Datang';
});

Route ::get('/about', function(){ 
    return 'Aisha Rahmadia Aqilah (2241760098) ';

});

//route paramaters
Route::get('/user/{aisha}', function ($aisha) {
    return 'Nama Saya '.$aisha;
    });

//route lebih dri 1 paramater
Route::get('/posts/{post}/comments/{comment}', function 
    ($postId, $commentId) {
     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });

Route::get('/article/{id}', function 
    ($artId) {
     return 'Halaman Artikel dengan ID ' .$artId;
    });

//optional paramaters
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

//prak 2
Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/', [HomeConstroller::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id}', [ArticlesController:: class,'articles']);

//
Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index', 'show']);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy']);

//prak 3
// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Aisha']); });

Route::get('/greeting', [WelcomeController::class, 'greeting']);