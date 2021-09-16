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

// Return String Response
Route::get('/hi/', function () {
    return "Wassup!";
});

// Return json Response
Route::get('/hi/json/', function () {
    return ["message"=>"Wassup"];
});


// Return Blade PHP Response
Route::get('/hello/', function () {
    return view("hello_world");
});


