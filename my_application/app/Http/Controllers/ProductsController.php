<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
	# This is now called index action
	# Index is just a naming convention
	public function index(Request $request)
	{
		$name = $request->query('name', 'Unknown');
	    #$name = Input::get("name");
	    error_log($name);

	    $products=Product::all();


	    $page_inputs = 
	    [
	        "title"=>"Products List",
	        "heading"=>"All Products",
	        "just_a_number"=>1,
	        "products"=>$products,
	        "name"=> $name,
	        "logged_in"=>Auth::check()
	    ];

	    return view("products.list",$page_inputs);
	}



	public function show($id)
	{
		$product =  Product::findOrFail($id);
	    $page_inputs = 
	    [
	        "title"=>"Product Details",
	        "product"=>$product,
	        "logged_in"=>Auth::check()
	    ];

	    return view("products.details",$page_inputs);
	}
	
	public function create()
	{
	    $page_inputs = 
	    [
	        "title"=>"Create a new Product",
	        "logged_in"=>Auth::check()
	    ];

	    return view("products.create",$page_inputs);
	}
}
