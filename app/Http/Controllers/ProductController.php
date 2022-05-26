<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index()
    {
        $products = Product::all();
        if (Auth::user()) {
            $loggedIn = true;
        } else {
            $loggedIn = false;
        }
        return view('products', ['products' => $products, 'loggedIn' => $loggedIn]);
    }

    function detail($id)
    {
//        $products = Product::all();
        $product = Product::find($id);
        return view('productDetail', ["product" => $product]);//, 'products' => $products
    }

    function addToCart(Request $request)
    {
        if (Auth::user()) {

            $cart = new Cart;
            $cart->user_id = auth()->id();
            $cart->product_id = $request->product_id;
            $cart->save();


            return redirect('products');
        } else {
            $loggedIn = false;
            return redirect('login');
        }
    }

    static function cartItem() //using static
    {
        $userId = auth()->id();
        return Cart::where('user_id', $userId)->count();
    }

    function cartItems()
    {
        //get cart Items
        $userId = auth()->id();
//        DB facade provides methods for each type of query: select, update, insert, delete, and statement.
        $items = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->select('products.*', 'cart.id as cart_id')
            ->get();

        //get cart items price
        $total = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->sum('products.price');
        return view('cartItems', ['total' => $total, 'items' => $items]);

    }


    function removeItem($id)
    {
        Cart::destroy($id);
        sleep(1);
        return redirect('cart_items');
    }

    function order()
    {
        $userId = auth()->id();
        $total = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->sum('products.price');
        return view('order', ['total' => $total]);
    }

    function contact()
    {
        return view('contact');

    }

    function about()
    {
        return view('about');

    }

    function makeOrder(Request $request)
    {
        $userId = auth()->id();
        //get Cart items of logged in user
        $items = Cart::where('user_id', $userId)->get();
        //add order info to the database
        foreach ($items as $item) {
            $order = new Order;
            $order->product_id = $item['product_id'];
            $order->user_id = $item['user_id'];
            //order status should be dynamic but I set it here as 'pending' by default
            $order->status = 'pending';
            $order->payment_method = $request->payment_method;
            $order->address = $request->address;
            $order->save();
            //Remove the items from cart after adding them to the order table

        }
        return $items;
    }

}
