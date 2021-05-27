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

Route::get('/hello', function () {
    return 'Hello Word';
});

Route::get('belajar', function() {
    echo '<h1>Hello World</h1>';
    echo '<p>sedang belajar laravel</p>';
});

Route::get('page/{nomor}', function($nomor){
    return 'Ini halaman ke-' . $nomor;
});

Route::get('image', function () {
    return view('img');
});

Route::get('multiple_images', function () {
    return view('multi_img');
});

Route::get('Controller1', 'Controller1@index');
Route::resource('user', 'Controller1');

//Route::get('/home', function () {
    //return view('coba1');
//});

//Route::group(['namespace' => 'Frontend'], function()
//{
    //Route::resource('home', 'HomeController');
//});

//Route::group(['namespace' => 'Backend'], function()
//{
    //Route::resource('dashboard', 'DashboardController');
//});

Auth::routes();

Route::group(['namespace' => 'Frontend'], function()
    {
        Route::get('/', 'HomeController@index');
        Route::resource('home', 'HomeController');
    });

Route::group(['middleware' => ['web','auth']], function()
    {
        Route::group(['namespace' => 'Backend'], function()
        {
            Route::resource('dashboard', 'DashboardController');
            Route::resource('pendidikan', 'PendidikanController');
        });
});
