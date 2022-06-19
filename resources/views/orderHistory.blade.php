@include('header')

<div class="container py-1">
    <div class="row text-center text-white mb-2">
        <div class="col-lg-7 mx-auto">
            <h1 class="display-4">Product List</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            @foreach ($orderHistory as $order)
                <ul class="list-group shadow mb-3">


                    <li class="list-group-item">

                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2 text-danger">{{ $order->name }}</h5>
                                <p class="font-italic text-muted mb-0 small">{{ $order->description }}</p>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    <h6 class="font-weight-bold my-2">{{ $order->price }}$</h6>

                                </div>
                            </div>
                            <img src="{{ $order->images }}" alt="image" width="200"
                                class="ml-lg-5 order-1 order-lg-2">

                        </div>
                        <span class="text-muted">Order Status : </span> <span
                            class="text-warning">{{ $order->status }}
                        </span><br>
                        <span class="text-muted">Payment Method : </span><span
                            class="text-success">{{ $order->payment_method }}</span><br>
                        <span class="text-muted">Adress : </span> <span
                            class="text-success">{{ $order->address }}<br></span>
                    </li>

                </ul>
            @endforeach
        </div>
    </div>
</div>
@include('footer')
