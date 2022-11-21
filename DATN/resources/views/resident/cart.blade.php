@include('layouts.header')
<section class="section section-top section-full">
    <div class="bg-cover bg-top" style=""></div>
    <div class="bg-overlay"></div>
    <div class="container contact-index">
        <section style="background-color: #eee;">
            <div class="container py-5">
              <div class="wrapper row">
                @foreach ($products as $product)  
                  <div class="preview col-md-6 product_id" alt="{{csrf_token()}}" value = "{{$product->id}}">
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
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <span class="review-no">41 reviews</span>
                    </div>
                    <p class="product-description" value ="{{$product->price}}">{{$product->content}}.</p>
                    <h4 class="price" >current price: <span>${{$product->price}}</span></h4>
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
                    @if(Session::has('user_id'))
                      <div class="action">
                        <button style="border: 1px solid" class="add-to-cart btn btn-default" type="submit">add to cart</button>
                      </div>
                    @else
                      <!-- Button trigger modal -->
                      <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="btnAuth">
                                <h1 class="">LOG IN</h1>
                              </div>
                             <!------ Login Form -------- -->

                                  <div class="formGroup form_login_modal" alt="{{csrf_token()}}">
                                      <input type="email" class="email" placeholder="Email" name="email" >
                                  </div>
                                  <div class="formGroup">
                                      <input type="password" class="password" name="password" id="password" placeholder="Password">
                                  </div>
                                  <div class="formGroup social-login row">
                                      <div class="col-md-6 login_with login_with_facebook">
                                          <a rel="noopener" href="" class="social_text">
                                              <i class="fab fa-facebook"></i> Facebook
                                          </a>
                                      </div>
                                      <div class="col-md-6 login_with login_with_gmail">
                                          <a rel="noopener" href="" class="social_text">
                                              <i class="fab fa-google"></i> Google
                                          </a>
                                      </div>
                                  </div>
                                  <div class="checkBox">
                                      <input type="checkbox" name="checkbox" id="checkbox">
                                  <span class="">Ghi nhớ tài khoản đăng nhập</span>
                                  </div>
                                  <div class="formGroup forgot_password">
                                      <a href="/forgotpassword" class=" forgot_password_text">Quên mật khẩu ?</a>
                                  </div>
                                  <div class="formGroup forgot_password">
                                      <span class="">Bạn chưa có tài khoản ? <a href="/register">ĐĂNG KÝ</a> tại đây</span>
                                  </div>
                                  <div class="formGroup submit">
                                      <button type="submit" class="btn btn-purchase login-modal">ĐĂNG NHẬP</button>
                                  </div>
                            </div>
                            <div class="modal-footer">
                              <button class="btn btn-secondary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button style="border: 1px solid; width: max-content;" class="add-card-login btn btn-default" data-bs-toggle="modal" href="#exampleModalToggle" role="button">ADD TO CART</button>
                    @endif
                  </div>
                @endforeach
              </div>
            </div>
          </section> 
    </div>
</section>
@push('custom-scripts')
    <script type="text/javascript" src="{{ asset('js/cart.js') }}"></script>
@endpush
@include('layouts.footer')