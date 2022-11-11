@include('layouts.header')
<section class="section section-top section-full">
    <div class="bg-cover bg-top" style=""></div>
    <div class="bg-overlay"></div>
    <div class="container contact-index">
        <section style="background-color: #eee;">
            <div class="container py-5">
              <div class="wrapper row">
                @foreach ($products as $product)
                <div class="preview col-md-6">
                  <div class="preview-pic tab-content">
                    <div class="tab-pane active" id="pic-1"><img src="/image/{{$product->image}}" /></div>
                  </div>
                </div>
                <div class="details col-md-6">
                  <h3 class="product-title">{{$product->name}}</h3>
                  <div class="rating">
                    <div class="stars">
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                    </div>
                    <span class="review-no">41 reviews</span>
                  </div>
                  <p class="product-description">{{$product->content}}.</p>
                  <h4 class="price">current price: <span>${{$product->price}}</span></h4>
                  <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                  <h5 class="sizes" style="line-height:28px">sizes:
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">S</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">M</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                      <label class="form-check-label" for="inlineRadio2">L</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
                      <label class="form-check-label" for="inlineRadio3">XL</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
                      <label class="form-check-label" for="inlineRadio3">XXL</label>
                    </div>
                  </h5>
                  <h5 class="quantity" >Quantity:
                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                      <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                        <i class="fas fa-minus"></i>
                      </button>

                      <input style="width: -webkit-fill-available;" id="form1" min="0" name="quantity" value="1" type="number"
                        class="form-control form-control-sm" />

                      <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                  </h5>
                  <h5 class="colors"  style="line-height:28px; font-weight: none !important;">colors:
                  </h5>
                  <div class="action">
                    <a style="border: 1px solid" href="/add-to-cart/{{$product->id}}" class="add-to-cart btn btn-default" type="button">add to cart</a>
                    <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </section> 
    </div>
</section>
@push('scripts')
        <script src="{{ asset('js/show.js') }}"></script>
    @endpush
@include('layouts.footer')