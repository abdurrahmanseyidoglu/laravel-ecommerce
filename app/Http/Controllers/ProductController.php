<?php

namespace App\Http\Controllers;

use App\Models\Cart;
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
        if (Auth::user()) {
            $cart = new Cart;
            $cart->user_id = auth()->id();
            $cart->product_id = $request->product_id;
            $cart->save();

            return redirect('products');
        } else return redirect('login');
    }

    static function cartItem() //using static
    {
        $userId = auth()->id();
        return Cart::where('user_id', $userId)->count();
    }
}
