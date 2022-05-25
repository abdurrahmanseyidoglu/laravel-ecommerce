<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    function cartItems()
    {
        $userId = auth()->id();
//        DB facade provides methods for each type of query: select, update, insert, delete, and statement.
        $items = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->select('products.*','cart.id as cart_id')
            ->get();
        return view('cartItems', ['items' => $items]);
    }
}
