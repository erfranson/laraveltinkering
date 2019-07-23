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
// these are now in the controllers if they are defined in this file they are closures
// Route::get('/', function () {
//     return view('home');
// });

// showing route::view method

// Route::view('/', 'home')->name('home');

// using data in the routes
// Route::get('/blog-post/{blog_post_id}/{welcome?}', function ($id, $welcome = 1) {
//     $pages = [
//         1 => [
//             'title' => 'from page 1'
//         ],
//         2 => [
//             'title' => 'from page 2'
//         ]
//     ];
//     $welcomes = [1 => 'Hello', 2 => 'Welcome to '];
//     return view('blog-post', [
//         'data' => $pages[$id],
//         'welcome' => $welcomes[$welcome]
//     ]);
// })->name('blog-post');

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::view('/contact', 'contact')->name('contact');


Route::get('/', 'HomeController@home')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/blog-post/{blog_post_id}/{welcome?}', 'HomeController@blogPost')->name('blog-post');
