@include('header')
<div class="container  mt-5 ">
    <div class="row d-flex justify-content-center mt-5 ">
        <div class="col-md-10 mt-5">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="thumbnail text-center">
                                <img src={{ $product->images }} width="400">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <h1>Product details</h1>
                            <div class="mt-4 mb-3">
                                <h5 class="text-uppercase">{{ $product->name }}</h5>
                                <div class="price d-flex flex-row align-items-center"><span
                                        class="act-price">{{ $product->price }}$</span>
                                </div>
                            </div>
                            <p class="about">{{ $product->description }}</p>
                            <form action="/add_to_cart" method="POST">
                                @csrf
                                <input name="product_id" type="hidden" value={{ $product['id'] }}>
                                <div class="cart mt-4 align-items-center">
                                    <button type="submit" class="btn btn-danger text-uppercase mr-2 px-4">Add to cart
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
