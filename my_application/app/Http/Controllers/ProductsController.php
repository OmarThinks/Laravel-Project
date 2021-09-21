<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
	        "name"=> $name
	    ];


	    return view("products.list",$page_inputs);
	}



	public function show($id)
	{
		$product =  Product::findOrFail($id);
	    $page_inputs = 
	    [
	        "title"=>"Product Details",
	        "product"=>$product
	    ];

	    return view("products.details",$page_inputs);
	}
	
	public function create()
	{
	    $page_inputs = 
	    [
	        "title"=>"Create a new Product",
	    ];

	    return view("products.create",$page_inputs);
	}
}
