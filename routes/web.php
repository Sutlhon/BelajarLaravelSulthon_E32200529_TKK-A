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

Route::get('/gambar', function(){
    return view('gambar');
});


//Route::get('user', 'PengontrolManajemenPengguna@index');
Route::resource('user', "PengontrolManajemenPengguna");

Route::get("/home", function(){
    return view("home");
});

Route::group(['namespace' => 'frontend'], function()
    {
        Route::resource('home', "HomeController");
    });

Route::group(['namespace' => 'backend'], function()
    {
        Route::resource('dashboard', 'DashboardController');
    });