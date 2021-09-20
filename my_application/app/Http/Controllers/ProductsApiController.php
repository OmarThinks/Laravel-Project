<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductsApiController extends Controller
{
    public function index()
    {
    	return Product::paginate(2);
    }
    
    public function store(Request $request)
    {
    	$validatedData = $request->validate([
        'name' => ['required',"min:3",'max:200',"string"],
        'description' => ['required',"min:3",'max:2000',"string"],
        'price' => ['required',"min:.01",'max:100000',"numeric"]
    	]);
    	error_log($validatedData["name"]);
    	return true;

    	
    }



}
