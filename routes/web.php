<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;

use App\Http\Controllers\PageController;

// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Route::get('/hello', [WelcomeController::class, 'hello']);

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// Route::get('/hello', function () {
//     return ('Hello World');
// });

// Route::get('/world', function () {
//     return 'World';
// });

// Route::get('/selamat', function () {
//     return 'selamat datang';
// });

// Route::get('/about', function () {
//     return '244107020206 | Kreszen Vallentino Arjuna Wijono';
// });

// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya '.$name;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-'.$postId." Komentar ke: ".$commentId;
// });

// Route::get('/articles/{id}', function ($id) {
//     return "Halaman Artikel dengan ID ".$id;
// });

// Route::get('/user/{name?}', function ($name='John') {
//     return 'Nama saya '.$name;
// });

use App\Http\Controllers\PhotoController;

// Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);
