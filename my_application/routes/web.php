<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
Route::get('/products/', function (Request $request) {
    $name = $request->query('name', 'Unknown');
    #$name = Input::get("name");
    error_log($name);
    $products =[
        ["name"=>"Labtop","price"=>"50"],
        ["name"=>"Mobile","price"=>"20"],
        ["name"=>"Desktop","price"=>"100"],
        ["name"=>"Table","price"=>"30"],
    ];

    $page_inputs = 
    [
        "title"=>"Products List",
        "heading"=>"All Products",
        "just_a_number"=>1,
        "products"=>$products,
        "name"=> $name
    ];


    return view("products_list",$page_inputs);
});




Route::get('/products/{id}', function ($id) {
    $page_inputs = 
    [
        "title"=>"Product Details",
        "id"=>$id
    ];

    return view("products_details",$page_inputs);
});












