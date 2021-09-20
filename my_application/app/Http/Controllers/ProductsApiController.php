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
        'name' => ['required','max:200',"string"],
        'description' => ['required','max:200',"string"],
        'price' => ['required',"numeric"]
    	]);
    	return true;

    	
    }



}
