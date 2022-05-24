<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    function index()
    {
        $products = Product::all();

        return view('products', ['products' => $products]);
    }

    function detail($id)
    {
        $products = Product::all();
        $product = Product::find($id);
        return view('productDetail', ["product" => $product, 'products' => $products]);
    }

    function addToCart(Request $request)
    {
        if(Auth::user()){
            return 'looged in';
        }
        else return redirect('login');
    }
}
