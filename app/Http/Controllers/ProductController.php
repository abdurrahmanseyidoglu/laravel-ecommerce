<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
       $products= Product::all();

        return view('products',['products'=>$products]);
    }
    function detail($id){
        return  Product::find($id);
    }
}
