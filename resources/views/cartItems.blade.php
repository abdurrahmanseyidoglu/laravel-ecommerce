<?php

use App\Http\Controllers\ProductController;

$cartItems = ProductController::cartItem() //using a function inside ProductController because I could not pass the value via return view


?>
@include('header')
<section class="pt-5 pb-5 mt-5">
    <div class="container ">
        <div class="row w-100">
            <div class="col-lg-12 col-md-12 col-12">
                <h3 class="display-5 mb-2 text-center">Shopping Cart</h3>
                <p class="mb-5 text-center">
                    There is <span class="font-weight-bold h4">{{$cartItems}}</span> items in your cart</p>
                <table id="shoppingCart" class="table table-condensed table-responsive">
                    <thead>
                    <tr>
                        <th style="width:60%">Product</th>
                        <th style="width:12%">Price</th>
                        <th style="width:1%">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-md-3 text-left">
                                        <img src="{{$item->images}}" alt=""
                                             class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                    </div>
                                    <div class="col-md-9 text-left mt-sm-2">
                                        <h4>{{$item->name}}</h4>
                                        <h4 class="font-weight-light">{{$item->description}}</h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price" class="h4">{{$item->price}}$</td>

                            <td class="actions" data-th="">
                                <div class="text-right">
                                    <a href="/remove_item/{{$item->cart_id}}">
                                        <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </a></div>

                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                <div class="float-right text-right">

                    <h4>Total Price</h4>
                    <h1>{{$total}}$</h1>
                </div>
            </div>
        </div>
        <div class="row mt-4 d-flex align-items-center">
            <div class="col-sm-6 order-md-2 text-right">
                <a href="catalog.html" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">Order Now</a>
            </div>
            <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
                <a href="products">
                    <i class="fas fa-arrow-left mr-2"></i> Continue Shopping</a>
            </div>
        </div>
    </div>
</section>
@include('footer')
