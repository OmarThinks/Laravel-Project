<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductsController;
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
    $page_inputs = 
    [
        "title"=>"Home",
    ];

    return view('home',$page_inputs);
});

// Return String Response
Route::get('/hi/', function () {
    return "Wassup!";
});

// Return json Response
Route::get('/hi/json/', function () {
    return ["message"=>"Wassup"];
});


// Render Blade PHP Response
Route::get('/products/', [ProductsController::class, 'index']);
Route::post('/products/', [ProductsController::class, 'store']);
Route::get('/products/create', [ProductsController::class, 'create']);
Route::get('/products/{id}', [ProductsController::class, 'show']);












