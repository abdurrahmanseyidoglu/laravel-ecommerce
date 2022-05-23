@include('header')
<!-- Carousel wrapper -->
<!DOCTYPE html>
<html lang="en">

<body>
<!-- Navigation-->

<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Selling only the best things online </h1>
            <p class="lead fw-normal text-white-50 mb-0">More than just a reliable e-commerce platform </p>
        </div>
    </div>
</header>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach($products as $product)
                <div class="col mb-5">

                        <div class="card h-100">
                            <!-- Product image-->
                            <a href="detail/{{$product['id']}}">  <img class="card-img-top img-responsive" src={{$product->images}} alt="..."/></a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <a href="detail/{{$product['id']}}">   <h5 class="fw-bolder">{{$product->name}}</h5> </a>
                                    <!-- Product price-->
                                    {{$product->price}}$
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <form action="/add_to_cart" method="POST">
                                    @csrf
                                    <input name="product_id" type="hidden" value={{$product['id']}} >
                                    <div class="text-center">
                                        <input type="submit" class="btn btn-outline-dark mt-auto" value="Add to cart">

                                    </div>
                                </form>
                            </div>
                        </div>

                </div>
            @endforeach


        </div>
    </div>
</section>
<!-- Footer-->
@include('footer')
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>

