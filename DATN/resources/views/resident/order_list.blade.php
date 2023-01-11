@include('layouts.header')
<section class="section section-top section-full">
    <div class="bg-cover bg-top" style=""></div>
    <div class="bg-overlay"></div>
    <div class="container">
        @foreach($Order as $orders)
            <article class="card">
                <header class="card-header"> My Orders / Tracking </header>
                <div class="card-body"  value="{{$orders->id}}">
                    <h6>Order ID: {{$orders->id}}</h6>
                    <ul class="row">
                        <li class="col-md-4">
                            <figure class="itemside mb-3">
                                <div class="aside"><img src="/image/{{$orders->product->image}}" class="img-sm border"></div>
                                <figcaption class="info align-self-center">
                                    <p class="title">{{$orders->product->name}}<br> </p> <span class="text-muted">{{$orders->product->price}} đ</span>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                    <article class="card">
                        <div class="card-body row " id = "Hieu" value = "{{$orders->amount}}">
                            <div class="col"> <strong>Estimated Delivery time:</strong> <br>{{$orders->created_at->addDays(7)->format('D-m-y')}}</div>
                            <div class="col"> <strong>Đơn giá:</strong> <br> {{$orders->product->price}} đ</div>
                            <div class="col" id = "append"> <strong>Số lượng:</strong>
                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                    <button id="stepDown" class="btn btn-link px-2"
                                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                      <i class="fas fa-minus"></i>
                                    </button>
            
                                    <input style="width: -webkit-fill-available;" id="form1" min="0" name="quantity" value="1" type="number"
                                      class="form-control form-control-sm" />
            
                                    <button  id="stepUp" class="btn btn-link px-2"
                                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                      <i class="fas fa-plus"></i>
                                    </button>
                                  </div>
                            </div>
                            <div class="col " value = "{{$orders->amount}}" id ="total-amount"> <strong>Số tiền:</strong> <br> {{$orders->amount}} đ</div>
                        </div>
                        
                    </article>
                    <button  href="/list-transaction" style="width: 150px; margin-left:80%;" value="{{$orders->id}}" data-abc="{{csrf_token()}}" id="btn_success" class="btn btn-primary btn_success">Thanh toán</button>
                    <hr>
                    <a href="/add-to-cart/{{$orders->product_id}}" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Quay trở về</a>
                </div>
            </article>
        @endforeach
    </div>
</section>
@push('custom-scripts')
    <script type="text/javascript" src="{{ asset('js/cart.js') }}"></script>
@endpush
@include('layouts.footer')