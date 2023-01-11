@include('layouts.header')
<section class="section section-top section-full">
    <div class="bg-cover bg-top" style=""></div>
    <div class="bg-overlay"></div>
    <div class="container contact-index">
        <section style="background-color: #eee;">
            <div class="container py-5">
                @foreach ($Transaction as $hieu) 
                <div class="wrapper row">
                    <div class="preview col-md-6 product_id" alt="{{csrf_token()}}" value = "">
                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1"><img src="/image/{{$hieu->image}}" /></div>
                        </div>
                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title">{{$hieu->name}}</h3>
                        <div class="rating">
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <span class="review-no">41 Đánh giá</span>
                        </div>
                        <p class="product-description" value ="{{$hieu->amount}}">{{$hieu->content}}.</p>
                        <h4 class="price" >Tổng tiền: <span>{{$hieu->amount}} đ</span></h4>
                    //////////////////////////
                        <h5 class="quantity" >Số lượng: {{$hieu->quantity}}</h5>
                        <h5 class="colors"  style="line-height:28px; font-weight: none !important;">colors:
                        </h5>
                    </div>
              </div>
              @if($hieu->status == 'buy')
                <a style="margin-left: 40%" class="btn btn-secondary">Đang chờ xác nhận từ cửa hàng...</a>
              @endif
              <hr>
              @endforeach
            </div>
      </section> 
    </div>
</section>
@include('layouts.footer')