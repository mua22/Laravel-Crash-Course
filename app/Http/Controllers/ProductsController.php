<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        //$products = array('laptop','oppo','iphone');
        //$total = 3;
        $products = Product::all();
        //print_r($products);
        //dd(compact('products'));
        //return compact('products');
        return view('homepage',compact('products'));
    }
}
