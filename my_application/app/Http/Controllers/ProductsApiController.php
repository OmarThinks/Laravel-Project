<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductsApiController extends Controller
{
    public function index()
    {
    	$products=Product::all();
    	return $products;
    }
}
