<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        //fetch data from db
//        $products = Product::all();
        $products = Product::paginate(3);
        //dd(compact('products'));
        return view('products.index',compact('products'));
    }
}
