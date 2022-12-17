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
                        <button value = "{{ Session::get('user_id') }}" style="border: 1px solid" class="add-to-cart btn btn-default" type="submit">add to cart</button>
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
                  <i class="fa fa-heart" id="heart" ></i>
                @endforeach
              </div>
            </div>
          </section> 
    </div>
</section>
<section class="section">
  <div class="container">
    <div class="row">
        <div class="col-8">
          <div class="card mt-4">
            <h5 class="card-header">ĐÁNH GIÁ SẢN PHẨM <span  class="comment-count float-right badge badge-info"></span></h5> 
            @foreach ($products as $product)
            
              <div class="card-body">
                  @csrf
                  <div class="add-comment mb-3 " >
                      <textarea id="comment_content" type="text" class="form-control comment" name="comment" placeholder="Enter Comment"></textarea>
                      @if(Session::has('user_id'))
                      <div class="action">
                        <button alt="{{ $product->id }}" value="{{csrf_token()}}" class="btn btn-dark btn-sm mt-2 save_comment">Submit</button>
                      </div>
                    @else
                    <!-- Button trigger modal -->
                    <div class="alert alert-warning alert-dismissible fade show">
                  <!-- Large modal -->
                    <button alt="{{ $product->id }}" value="{{csrf_token()}}" class="btn btn-dark btn-sm mt-2">Submit</button>
                  @endif
                      
                  </div>
                  <div class="comments"> 
                    @if(count($product->Comment)>=0)
                        @foreach($product->Comment as $comment)
                            <blockquote class="blockquote">
                                <div class="comment-parent"><img  class="avatar" src="http://placeimg.com/40/40/animals">
                                    <div class="comment-group" data-comment="{{$comment->id}}" >
                                        <p class="name-comment" >{{ $comment->user->name}}</p>
                                        <p class="date-comment">{{ $comment->created_at }}</p>
                                        <p class="comment-content">{{ $comment->comment }}</p>
                                        @if($comment->count_like > 0)
                                          <span class="badge like {{$comment->id}}" id="badge-like" data-value="{{$comment->id}}"  style="position: absolute;/* float: right; */margin-left: 550px;margin-top: -15px;">{{$comment->count_like}}</span>
                                        @endif 
                                    </div> 
                                </div>
                                <small class="mb-0"></small>
                            </blockquote>
                            <div class="button-post">
                                <a id="reply" data-id="{{$comment->id}}"  class="">
                                  Reply
                                </a>
                                <a id="saveLike" data-comment = "{{$comment->id}}" class="" data-type="comment" alt="{{ $product->id}}">
                                  Like
                                </a>
                                <div class="reply_system-{{$comment->id}}" id="reply-system" data-id="{{$comment->id}}" >
                                    @if ( $comment->replies )
                                        @foreach($comment->replies as $rep1)
                                        <div class="comment-parent">
                                        <img  class="avatar" src="http://placeimg.com/30/30/animals">
                                            <div class="comment-group">
                                                <div class="group">
                                                  <p class="name-comment" >{{ $comment->user->name}}</p>
                                                  <p class="date-comment">{{ $rep1->created_at }}</p>
                                                  <p class="comment-content">{{ $rep1->comment }}</p>
                                                </div>
                                            </div>
                                        </div >
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @else
                    <p class="no-comments">No Comments Yet</p>
                    @endif
                </div>
              </div>
            @endforeach
          </div>
        </div>
      @if(Session::has('user_id'))
      <div class="col-4">
        <div class="wrapper d-flex justify-content-center align-items-center cart-couno">
          <div class="card-discount">
            <div class="content">
              <div class="logo text-right">
                <img src="/assets/img/logo.png" width="80">
              </div>
              <div class="text-center text-uppercase text-white off">
                <span>Flat</span>
                <h1 class="mt-0">50%</h1>
              </div>
              <div class="text-center text-white">
                <span class="plus">+</span>
              </div>
              <div class="text-center text-uppercase text-white">
                <h3 class="m-0">10% OFF</h3>
              </div>
            </div>
            <div class="px-5 mb-3">
              <div class="code text-center mt-4">
                <a href="/">Use code : Extra10</a>
              </div>
            </div>
          </div>
        </div>
        </div>
        @endif
      </div>
    </div>
</section>
@push('custom-scripts')
    <script type="text/javascript" src="{{ asset('js/cart.js') }}"></script>
@endpush
@include('layouts.footer')