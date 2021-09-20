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
	    
	    /*$products =[
	        ["name"=>"Labtop","price"=>"50"],
	        ["name"=>"Mobile","price"=>"20"],
	        ["name"=>"Desktop","price"=>"100"],
	        ["name"=>"Table","price"=>"30"],
	    ];*/

	    $products=Product::all();

	    $page_inputs = 
	    [
	        "title"=>"Products List",
	        "heading"=>"All Products",
	        "just_a_number"=>1,
	        "products"=>$products,
	        "name"=> $name
	    ];


	    return view("products_list",$page_inputs);
	}



	public function show($id)
	{
	    $page_inputs = 
	    [
	        "title"=>"Product Details",
	        "id"=>$id
	    ];

	    return view("products_details",$page_inputs);
	}
}
