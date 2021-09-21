<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductsApiController extends Controller
{
    public function index()
    {
    	return Product::paginate(10);
    }
    
    public function store(Request $request)
    {
    	$validatedData = $request->validate([
        'name' => ['required',"min:3",'max:200',"string"],
        'description' => ['required',"min:3",'max:2000',"string"],
        'price' => ['required',"min:.01",'max:100000',"numeric"]
    	]);
    	
    	$product = new Product();
		$product->name = $validatedData["name"];
		$product->description = $validatedData["description"];
		$product->price = $validatedData["price"];
		$product->save();

    	return ["success"=>true,"message"=>"product created successfully"];
    }

	public function destroy($id)
	{
		$product = Product::findOrFail($id);

		$product->delete();
    	return ["success"=>true,"message"=>"product deleted successfully"];

	}

}
