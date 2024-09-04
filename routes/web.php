<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route ::get('/hello', function(){
    return 'hello world';
});

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