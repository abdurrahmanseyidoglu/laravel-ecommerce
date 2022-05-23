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
        $product= Product::find($id);
        return view('productDetail',["product"=>$product]);
    }
}
