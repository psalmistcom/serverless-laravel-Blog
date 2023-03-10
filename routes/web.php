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
    return view('welcome');
});

Route::get('/posts/{post}', function($slug){
    // return $slug;
    // $path = __DIR__ . '/../resources/post/{$slug}.html';

    // if (!file_exists($path)) {
    //     abort(404);
    // }
    $post = file_get_contents(__DIR__ . "/../resources/posts/{$slug}.html");
    return view('post', [
        'post'=> $post
    ]);
});
