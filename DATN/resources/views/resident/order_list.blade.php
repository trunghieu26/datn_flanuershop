@include('layouts.header')
<section class="section section-top section-full">
    <div class="bg-cover bg-top" style=""></div>
    <div class="bg-overlay"></div>
    <div class="container">
        @foreach($Order as $orders)
            <article class="card">
                <header class="card-header"> My Orders / Tracking </header>
                <div class="card-body">
                    <h6>Order ID: {{$orders->id}}</h6>
                    <ul class="row">
                        <li class="col-md-4">
                            <figure class="itemside mb-3">
                                <div class="aside"><img src="/image/{{$orders->product->image}}" class="img-sm border"></div>
                                <figcaption class="info align-self-center">
                                    <p class="title">{{$orders->product->name}}<br> </p> <span class="text-muted">${{$orders->product->price}} </span>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                    <article class="card">
                        <div class="card-body row">
                            <div class="col"> <strong>Estimated Delivery time:</strong> <br>{{$orders->created_at->addDays(7)->format('D-m-y')}}</div>
                            <div class="col"> <strong>Shipping BY:</strong> <br> BLUEDART, | <i class="fa fa-phone"></i> +1598675986 </div>
                            <div class="col"> <strong>Status:</strong> <br> Picked by the courier </div>
                            <div class="col"> <strong>Tracking #:</strong> <br> BD045903594059 </div>
                        </div>
                    </article>
                    <div class="track">
                        <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Order confirmed</span> </div>
                        <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Picked by courier</span> </div>
                        <div class="step"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> On the way </span> </div>
                        <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text">Ready for pickup</span> </div>
                    </div>
                    <hr>
                    <a href="#" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back to orders</a>
                </div>
            </article>
        @endforeach
    </div>
</section>
@push('custom-scripts')
    <script type="text/javascript" src="{{ asset('js/cart.js') }}"></script>
@endpush
@include('layouts.footer')